<?php

namespace App\Controller;

use App\Service\DispatchService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/exchange", )
 */
class ExchangeController extends AbstractController {
    
    private $dispatcher;

    public function __construct(DispatchService $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    /**
     * @Route("/{amount}/{from}/{to}", name="exchange", methods={"GET"})
     */
    public function exchange(float $amount, string $from, string $to) {
        $toAmount = $this->dispatcher->getExchange($amount, $from, $to);
        var_dump($toAmount);
        die();
    }
}