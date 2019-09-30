<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Message;

class NoteController extends AbstractController
{
    /**
     * @Route("/note", name="note")
     */
    public function index(Message $message)
    {
        $student_note=$message->noteMessage('20','mariem');
        $this->addFlash('New note', $student_note);
        return $this->render('note/index.html.twig', [
            'controller_name' => 'NoteController',
        ]);
    }
}
