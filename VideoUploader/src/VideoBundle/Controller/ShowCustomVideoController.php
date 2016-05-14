<?php

namespace VideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowCustomVideoController extends Controller {

    public function showAction($video_Id)
    {
        $em = $this->getDoctrine()->getManager();
        $video = $em->getRepository('EntityBundle:DesktopVideo')
            ->findOneById($video_Id);

        return $this->render('VideoBundle:ShowVideo:show_custom_video.html.twig', array(
            'video' => $video
        ));
    }
}