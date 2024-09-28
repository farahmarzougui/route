<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ConferenceController extends AbstractController
{
    #[Route('/conference/{name}', name: 'app_conference')]
    public function index($name): Response
    {
        return new Response ("bonjour " . $name);
    }
}
