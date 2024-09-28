<?php
/*
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/Author')]
class AuthorController extends AbstractController
{
    // Méthode pour afficher un auteur spécifique
    #[Route("/author/{name}", name: "show_author")]
    public function showAuthor($name): Response
    {
        return $this->render('author/show.html.twig', [
            'name' => $name,
        ]);
    }

    /*
    #[Route("/authors", name: "list_authors")]
    public function listAuthors(): Response
    {
        $authors = array(
            array('id' => 1, 'picture' => '/image/Victor-Hugo.jpg', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/image/william-shakespeare.jpeg', 'username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200),
            array('id' => 3, 'picture' => '/image/Taha_Hussein.jpg', 'username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),
        );

        return $this->render('author/list.html.twig', [
            'authors' => $authors,
        ]);
    }
}*/


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/Author')]
class AuthorController extends AbstractController
{
    
    #[Route("/author/{name}", name: "show_author")]
    public function showAuthor($name): Response
    {
        return $this->render('author/show.html.twig', [
            'name' => $name,
        ]);
    }

    
    #[Route("/authors", name: "list_authors")]
    public function listAuthors(): Response
    {
        $authors = array(
            array('id' => 1, 'picture' => '/image/Victor-Hugo.jpg', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/image/william-shakespeare.jpeg', 'username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200),
            array('id' => 3, 'picture' => '/image/Taha_Hussein.jpg', 'username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),
        );

        
        if (empty($authors)) {
            return $this->render('author/list.html.twig', [
                'authors' => null,
            ]);
        }

        
        $totalBooks = array_sum(array_column($authors, 'nb_books'));

        return $this->render('author/list.html.twig', [
            'authors' => $authors,
            'total_books' => $totalBooks,
            'total_authors' => count($authors),
        ]);
    }


    #[Route("/author/details/{id}", name: "author_details")]
    public function authorDetails($id): Response
    {
        $authors = array(
            1 => array('id' => 1, 'picture' => '/image/Victor-Hugo.jpg', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100),
            2 => array('id' => 2, 'picture' => '/image/william-shakespeare.jpeg', 'username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200),
            3 => array('id' => 3, 'picture' => '/image/Taha_Hussein.jpg', 'username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),
        );

        
        if (!isset($authors[$id])) {
            throw $this->createNotFoundException("Auteur non trouvé.");
        }

        $author = $authors[$id];

        return $this->render('author/showAuthor.html.twig', [
            'author' => $author,
        ]);
    }
}


