<?php

namespace Redmonster\PaulRevereBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AnnouncementRepository extends EntityRepository
{

    public function current()
    {
        $current = $this->findBy(array(), array('createdAt' => 'DESC'), 1);

        return empty($current) ? array() : array_shift($current);
    }

}