<?php
/**
 * Created by PhpStorm.
 * User: harry
 * Date: 24-05-17
 * Time: 13:24
 */

namespace AppBundle\Service;

use AppBundle\Model\ArticleTarget;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\Routing\RouterInterface;

/**
 * Class ArticleRepository
 * @package AppBundle\Service
 * @DI\Service("repository.article")
 */
class ArticleRepository
{
    /**
     * @var RouterInterface
     * @DI\Inject("router")
     */
    public $router;

    public function findByTarget($target)
    {
        $result = [];
        foreach ($this->database() as $item) {
            if($item['target'] == $target) $result[] = $item;
        }
        return $result;
    }

    public function findAll()
    {
        $set = $this->database();

        usort($set, function($a, $b){
            if($a['last_modified'] == $b['last_modified']) return 0;
            return $a['last_modified'] < $b['last_modified'] ? 1 : -1;
        });

        return $set;
    }

    protected function database()
    {
        return [
            [
                'id' => 'antioche',
                'title' => 'La ville d’Antioche, la ville de Homs en Syrie (Emeès)',
                'author' => 'Harry Christiaens',
                'last_modified' => \DateTime::createFromFormat('d-m-Y', '01-02-2017'),
                'tags' => ['Syrie', 'Paul', 'Antioche'],
                'target' => ArticleTarget::EASY,
                'url' => $this->router->generate('antioche'),
            ],
            [
                'id' => 'ignaces',
                'title' => 'ignaces',
                'author' => 'Harry Christiaens',
                'last_modified' => \DateTime::createFromFormat('d-m-Y', '07-02-2017'),
                'tags' => [''],
                'target' => ArticleTarget::HARD,
                'url' => $this->router->generate('ignaces'),
            ],
            [
                'id' => 'tertulien',
                'title' => 'tertulien',
                'author' => 'Harry Christiaens',
                'last_modified' => \DateTime::createFromFormat('d-m-Y', '07-02-2017'),
                'tags' => [''],
                'target' => ArticleTarget::HARD,
                'url' => $this->router->generate('tertulien'),
            ],
            [
                'id' => 'tsth',
                'title' => 'tsth',
                'author' => 'Harry Christiaens',
                'last_modified' => \DateTime::createFromFormat('d-m-Y', '07-02-2017'),
                'tags' => [''],
                'target' => ArticleTarget::HARD,
                'url' => $this->router->generate('tsth'),
            ],
            [
                'id' => 'new',
                'title' => 'Nouvelle article',
                'author' => 'Benjamin Ellis ',
                'last_modified' => \DateTime::createFromFormat('d-m-Y', '24-05-2017'),
                'tags' => [''],
                'target' => ArticleTarget::MEDIUM,
                'url' => $this->router->generate('new'),
            ],
        ];
    }
}