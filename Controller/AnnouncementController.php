<?php

namespace Redmonster\PaulRevereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnnouncementController extends Controller
{
    public function currentAnnouncementAction()
    {
        return $this->render(
            'RedmonsterPaulRevereBundle:Announcement:announcement.html.twig',
            array('current_announcement' => $this->getRepository()->current())
        );
    }

    /**
     * @return \Redmonster\PaulRevereBundle\Entity\AnnouncementRepository
     */
    private function getRepository()
    {
        return $this->get('redmonster_paul_revere.repository.announcement');
    }
}