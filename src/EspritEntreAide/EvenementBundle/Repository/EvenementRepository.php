<?php

namespace EspritEntreAide\EvenementBundle\Repository;

/**
 * EvenementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EvenementRepository extends \Doctrine\ORM\EntityRepository
{
    public function trier(){
        return $this->findBy(array('etat'=>0), array('dateE'=>'ASC'));
    }
}
