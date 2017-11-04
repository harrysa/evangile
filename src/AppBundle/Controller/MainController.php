<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $articles = [
            [
                'title' => 'La ville d’Antioche, la ville de Homs en Syrie (Emeès)',
                'route' => 'antioche',
                'author' => 'Harry Christiaens',
                'created' => \DateTime::createFromFormat('d-m-Y', '07-02-2017'),
                'last_modified' => \DateTime::createFromFormat('d-m-Y', '07-02-2017'),
                'tag' => [''],
            ],
            [
                'title' => 'Ignaces',
                'route' => 'ignaces',
                'author' => 'Benjamin Ellis',
                'created' => \DateTime::createFromFormat('d-m-Y', '04-11-2017'),
                'last_modified' => \DateTime::createFromFormat('d-m-Y', '07-02-2017'),
                'tag' => [''],
            ],
            [
                'title' => 'Tertulien',
                'route' => 'tertulien',
                'author' => 'Harry',
                'created' => \DateTime::createFromFormat('d-m-Y', '04-11-2017'),
                'last_modified' => \DateTime::createFromFormat('d-m-Y', '07-02-2017'),
                'tag' => [''],
            ],
        ];

        // replace this example code with whatever you need
        return $this->render('content/index.html.twig', [
            'articles' => $articles,
        ]);
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('content/contact.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
