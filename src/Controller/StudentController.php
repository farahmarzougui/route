<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("/student", name="student_index")
     */
    public function index(): Response
    {
        return new Response(
            '<html><body>Bonjour mes étudiants</body></html>'
        );
    }
}
