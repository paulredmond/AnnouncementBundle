<?php

namespace Redmonster\AnnouncementBundle\Twig;

use Redmonster\AnnouncementBundle\Model\Announcement;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AnnouncementExtension extends \Twig_Extension
{
    /**
     * Extension name
     *
     * @var string
     */
    private $name = "announcement_extension";

    /**
     * @var Symfony\Component\HttpFoundation\Request
     */
    private $request;

    /**
     * @var Symfony\Component\HttpFoundation\ParameterBag
     */
    private $cookies;

    public function __construct(ContainerInterface $container)
    {
        $this->request = $container->get('request');
        $this->cookies = $this->request->cookies;
    }

    public function getFunctions()
    {
        return array(
            'announcement_hidden' => new \Twig_Function_Method($this, 'announcementHidden'),
            'announcement_cookie' => new \Twig_Function_Method($this, 'getCookieName'),
        );
    }

    /**
     * @param \Redmonster\AnnouncementBundle\Model\Announcement $announcement
     * @return bool
     */
    public function announcementHidden(Announcement $announcement)
    {
        return $this->cookies->has($this->getCookieName($announcement));
    }

    public function getCookieName(Announcement $announcement)
    {
        return "announcement_{$announcement->getCreatedAt()->getTimestamp()}";
    }

    public function getName()
    {
        return $this->name;
    }
}