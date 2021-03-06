<?php

namespace Heysoft\MenuBundle\Repository;

/**
 * CategoriaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoriaRepository extends \Doctrine\ORM\EntityRepository
{
	public function findSinComidaDelDia()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM HeysoftMenuBundle:Categoria c WHERE c.categoria != :cdia ORDER BY c.categoria ASC'
            )->setParameter('cdia', 'cDia')
            ->getResult();
    }
}
