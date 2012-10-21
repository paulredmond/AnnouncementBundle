<?php

namespace Redmonster\PaulRevereBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AnnouncementRepository extends EntityRepository
{

    public function current()
    {
        $current = $this->findBy(array(), array('createdAt' => 'DESC'), 1);

        if (isset($current[0])) {
            return $current[0];
        }

        return array();
    }

}