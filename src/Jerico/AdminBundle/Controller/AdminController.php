<?php

namespace Jerico\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('JericoAdminBundle:Admin:index.html.twig');
    }
}
