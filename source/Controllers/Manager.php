<?php
/**
 * Created by PhpStorm.
 * User: José Luis
 * Date: 06/03/2023
 * Time: 11:01
 */

namespace Source\Controllers;

use Source\Models\UserModel;

/**
 * Class Manager
 * @package Source\Controllers
 */
class Manager extends Controller
{
    /**
     * @var Manager
     */
    private $user;

    /**
     * Manager constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->user = new UserModel();
    }

    /**
     *
     */
    public function dashboard()
    {
        if(isset($_SESSION['_user']) && !empty($_SESSION['_user']))
        {
            echo $this->view->render("manager::pages/home", [
                "title" => "Home | Manager"
            ]);
        }
        else
        {
            header("Location: ".url('manager'));
        }
    }

    /**
     *
     */
    public function login()
    {
        if(!isset($_SESSION['_user']) && empty($_SESSION['_user']))
        {
            echo $this->view->render("manager::pages/login", [
                "title" => "Login | Manager"
            ]);
        }
        else
        {
            header("Location: ".url('manager/dashboard'));
        }
    }

    /**
     *
     */
    public function auth()
    {
        $auth = $this->user->auth($_POST);
        if($auth)
        {
            $_SESSION['_user'] = $auth->data();

            $image = $this->user->getUsersImage($auth->data()->id);
            if($image || !is_null($image))
                $_SESSION['_user']->image = $image->data()->image;
            else
                $_SESSION['_user']->image = null;

            $this->response->emit('Sucesso', 'Bem vindo '.$auth->data()->name, 'success', 'login', $_SESSION);
        }
        else
        {
            $this->response->emit('Error', 'Erro ao logar-se. Verifique os dados inseridos', 'error');
        }
    }


    /**
     *
     */
    public function logout()
    {
        session_destroy();
        header("Location: ".url('manager'));
    }
}
