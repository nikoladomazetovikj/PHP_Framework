<?php

namespace app\controllers;

use app\models\User;
use nikola\phpFramework\Request;
use nikola\phpFramework\Response;
use nikola\phpFramework\Controller;
use nikola\phpFramework\Application;
use app\models\LoginForm;
use app\models\RegisterModel;
use nikola\phpFramework\middlewares\AuthMiddleware;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function login(Request $request, Response $response)
    {
        $loginForm = new LoginForm();
        if ($request->isPost()) {

            $loginForm->loadData($request->getBody());

            if ($loginForm->validate() && $loginForm->login()) {

                $response->redirect('/');
                return;
            }
        }
        $this->setLayout('auth');
        return $this->render('login', ['model' => $loginForm]);
    }

    public function register(Request $request)
    {
        $user = new User();
        if ($request->isPost()) {
            $user->loadData($request->getBody());

            if ($user->validate() && $user->save()) {
                Application::$app->session->setFlash('success', 'You have been successfully registrated');
                Application::$app->response->redirect("/");
                exit;
            }

            return $this->render('register', [
                'model' => $user
            ]);
        }

        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $user
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }

    public function profile()
    {
        return $this->render('profile');
    }
}