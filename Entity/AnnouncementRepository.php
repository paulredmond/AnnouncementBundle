<?php

namespace Redmonster\PaulRevereBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AnnouncementRepository extends EntityRepository
{

    public function current()
    {
        $current = $this->findBy(array(), array('createdAt' => 'DESC'), 1);

        return (array) array_shift($current);
    }

}