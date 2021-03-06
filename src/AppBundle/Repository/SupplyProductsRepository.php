<?php

namespace AppBundle\Repository;

/**
 * SupplyProductsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SupplyProductsRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByProductId($id)
    {
        return $this->findBy(array(
            'productId' => $id
        ));
    }

    public function findBySupplyId($supplyId)
    {
        return $this->findBy(array(
            'supplyId' => $supplyId
        ));
    }
}
