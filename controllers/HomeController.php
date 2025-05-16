<?php

namespace Attachee\Session\controllers;

use sigawa\mvccore\Request;
use sigawa\mvccore\Response;
use sigawa\mvccore\Controller;

class HomeController extends Controller
{
    public function index(Request $request, Response $response)
    {
        // Logic for your index method goes here
        return $this->render('home');
    }
    public function about(Request $request, Response $response)
    {
        // Logic for your index method goes here
        return $this->render('about');
    }
    public function products(Request $request, Response $response)
    {
        // Logic for your index method goes here
        return $this->render('products');
    }
    public function contact(Request $request, Response $response)
    {
        // Logic for your index method goes here
        return $this->render('contact');
    }
     public function blog(Request $request, Response $response)
    {
        // Logic for your index method goes here
        return $this->render('blog');
    }
}
