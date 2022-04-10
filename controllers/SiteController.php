<?php

namespace app\controllers;


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

    public function store()
    {
    }
}
