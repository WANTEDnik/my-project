<?php
/**
 * Created by PhpStorm.
 * User: Светлана Чурикова
 * Date: 12.12.2017
 * Time: 19:14
 */

namespace  App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{

    /**
     * @Route("/", name="home")
     */
    public function homeAction()
    {

        return $this->render('home/index.html.twig');

    }

    /**
     * @Route("/aboutUs", name="AboutUs")
     */
    public function aboutUsAction()
    {

        return $this->render('aboutUs/index.html.twig');

    }

    /**
     * @Route("/projects", name="projects")
     */
    public function projectsAction()
    {

        return $this->render('projects/index.html.twig');

    }

    /**
     * @Route("/general", name="general")
     */
    public function generalAction()
    {

        return $this->render('general/index.html.twig');

    }

    /**
     * @Route("/contacts", name="contacts")
     */
    public function contactsAction()
    {

        return $this->render('contacts/index.html.twig');

    }

    /**
     * @Route("/product/page1", name="product1")
     */
    public function page1Action()
    {

        return $this->render('product/page1/index.html.twig');

    }
}