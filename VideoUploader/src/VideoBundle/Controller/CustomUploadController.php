<?php

namespace VideoBundle\Controller;


use EntityBundle\Entity\DesktopVideo;
use VideoBundle\Form\Type\CustomVideoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Tests\Fixtures\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomUploadController extends Controller {

    public function customUploadAction(Request $request)
    {
        // 1) build the form
        $customVideo = new DesktopVideo();
        $form = $this->createForm(CustomVideoType::class, $customVideo);
        var_dump($customVideo);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($customVideo);
            $em->flush();
        }

        return $this->render(
            'VideoBundle:Uploader:customUploader.html.twig',
            array('form' => $form->createView())
        );
    }
}

