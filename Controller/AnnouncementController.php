<?php

namespace Redmonster\AnnouncementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnnouncementController extends Controller
{
    public function currentAnnouncementAction()
    {
        return $this->render(
            'RedmonsterAnnouncementBundle:Announcement:announcement.html.twig',
            array('current_announcement' => $this->getRepository()->current())
        );
    }

    /**
     * @return \Redmonster\PaulRevereBundle\Entity\AnnouncementRepository
     */
    private function getRepository()
    {
        return $this->get('redmonster_announcement.repository.announcement');
    }
}


