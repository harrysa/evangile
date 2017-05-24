<?php

namespace AppBundle\Controller;

use AppBundle\Model\ArticleTarget;
use AppBundle\Service\ArticleRepository;
use JMS\DiExtraBundle\Annotation as DI;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
    /**
     * @var ArticleRepository
     * @DI\Inject("repository.article")
     */
    public $articleRepository;

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $articles = $this->articleRepository->findAll();

        // replace this example code with whatever you need
        return $this->render('content/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/target/{target}", name="article_by_target")
     */
    public function articleByTargetEasy(Request $request, $target)
    {
        $articles = $this->articleRepository->findByTarget($target);

        // replace this example code with whatever you need
        return $this->render("content/articles_{$target}.html.twig", [
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
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('article/about.html.twig', []);
    }
}
