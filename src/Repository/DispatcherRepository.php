<?php

namespace App\Repository;

use App\Entity\Dispatcher;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Dispatcher|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dispatcher|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dispatcher[]    findAll()
 * @method Dispatcher[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DispatcherRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dispatcher::class);
    }
}
