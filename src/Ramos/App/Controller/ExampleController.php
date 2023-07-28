<?php


declare(strict_types=1);

namespace Tombo\Ramos\App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExampleController extends AbstractController
{
    #[Route('/examples', methods: ['GET'])]
    public function __invoke()
    {
        return $this->render('example.html.twig');
    }
}
