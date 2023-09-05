<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="dispatcher")
 * @ORM\Entity(repositoryClass="App\Repository\DispatcherRepository")
 */
class Dispatcher
{
    const API_REST = 'rest';
    const API_SOAP = 'soap';

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="api", type="string", length=4, nullable=false)
     */
    private $api;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApi(): ?string
    {
        return $this->api;
    }

    public function setApi(string $api): self
    {
        $this->api = $api;

        return $this;
    }
}