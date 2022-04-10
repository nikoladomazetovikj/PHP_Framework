<?php

namespace app\controllers;

use app\core\Application;
use app\core\Request;

class SiteController extends Controller
{

    public function index()
    {
        $arr = [

            'name' => "Nikola",
            'surname' => "Domazetovikj",
            'job'  => "full stack web developer",
            'years' => 22
        ];
        return $this->render('home', $arr);
    }

    public function show()
    {
        return $this->render('contact');
    }

    public function store(Request $request)
    {
        $body = $request->getBody();

        echo "<pre>";
        var_dump($body);
        echo "</pre>";
    }
}