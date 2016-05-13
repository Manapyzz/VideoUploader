<?php

namespace VideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowVideoController extends Controller {

    public function showAction($video_Id)
    {
        $em = $this->getDoctrine()->getManager();
        $video = $em->getRepository('EntityBundle:YoutubeVideo')
            ->findOneByYoutubeId($video_Id);

        return $this->render('VideoBundle:ShowVideo:show_video.html.twig', array(
            'video' => $video
        ));
    }
}