<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
class TestController extends AbstractController
{
    /**
     * @Route("/", name="test")
     */
    public function index(LoggerInterface $logger)
    {
        $logger->info('this is a course');
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
