<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig');
    }


    /**
     * @Route("/vorstand", name="vorstand")
     */
    public function vorstand(): Response
    {
        return $this->render('default/vorstand.html.twig');
    }

    /**
     * @Route("/satzung", name="satzung")
     */
    public function satzung(): Response
    {
        return $this->render('default/satzung.html.twig');
    }
    /**
     * @Route("/kontakt", name="kontakt")
     */
    public function kontakt(): Response
    {
        return $this->render('default/kontakt.html.twig');
    }

    /**
     * @Route("/datenschutz", name="datenschutz")
     */
    public function datenschutz(): Response
    {
        return $this->render('default/datenschutz.html.twig');
    }

    /**
     * @Route("/impressum", name="impressum")
     */
    public function impressum(): Response
    {
        return $this->render('default/impressum.html.twig');
    }
}
