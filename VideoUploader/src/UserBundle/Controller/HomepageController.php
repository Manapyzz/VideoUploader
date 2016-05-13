<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EntityBundle\Repository\YoutubeVideoVideoRepository;


class HomepageController extends Controller
{
    public function homeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $videos = $em->getRepository('EntityBundle:YoutubeVideo')
            ->findAll();

        return $this->render(
            'UserBundle:Homepage:homepage.html.twig',
            array('videos' => $videos));
    }
}
