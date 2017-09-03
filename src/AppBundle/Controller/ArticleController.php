<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends Controller
{
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
     * @Route("/new", name="new")
     */
    public function newAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('article/tsth.html.twig', []);
    }

}
