<?php

namespace App\Service;

use App\Entity\Dispatcher;

class DispatchService
{

    private $em;

    private $rest;

    private $soap;

    public function __construct(EntityManagerInterface $, RESTService $rest, SOAPService $soap)
    {
        $this->em = $em;
        $this->rest = $rest;
        $this->soap = $soap;
    }

    public function getExchange(float $amount, string $from, string $to) {
        $dispatcher = $this->em->getRepository(Dispatcher::class)->find(1);
        $method = $dispatcher->getApi();
        // $method = 'rest';

        $toAmount = $this->$method->getExchange($amount, $from, $to);

        if ($dispatcher->getApi() == Dispatcher::API_REST) {
            $dispatcher->setApi(Dispatcher::API_SOAP);
        } else {
            $dispatcher->setApi(Dispatcher::API_REST);
        }
        $this->em->persist($dispatcher);
        $this->em->flush();

        return $toAmount;
    }
}