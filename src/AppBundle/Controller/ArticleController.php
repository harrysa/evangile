<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends Controller
{
 
     /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('article/about.html.twig', []);
    }
    /**
     * @Route("/ignaces", name="ignaces")
     */
    public function ignacesAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('article/ignaces.html.twig', []);
    }

    /**
     * @Route("/antioche", name="antioche")
     */
    public function antiocheAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('article/antioche.html.twig', []);
    }

    /**
     * @Route("/tertulien", name="tertulien")
     */
    public function tertulienAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('article/tertulien.html.twig', []);
    }

    /**
     * @Route("/tsth", name="tsth")
     */
    public function tsthAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('article/tsth.html.twig', []);
    }

        /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('article/contact.html.twig', []);
    }



}
