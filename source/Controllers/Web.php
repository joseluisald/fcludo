<?php
/**
 * Created by PhpStorm.
 * User: José Luis
 * Date: 06/03/2023
 * Time: 11:01
 */

namespace Source\Controllers;

/**
 * Class Web
 * @package Source\Controllers
 */
class Web extends Controller
{
    /**
     * Web constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     */
    public function home()
    {
        echo $this->view->render("site::pages/home", [
            "title" => "Home | ".site('name')
        ]);
    }

    public function quemSomos()
    {
        echo $this->view->render("site::pages/quemSomos", [
            "title" => "Quem Somos | ".site('name')
        ]);
    }

    public function projetos()
    {
        echo $this->view->render("site::pages/projetos", [
            "title" => "Projetos | ".site('name')
        ]);
    }

    public function lab()
    {
        echo $this->view->render("site::pages/lab", [
            "title" => "Ludens Lab | ".site('name')
        ]);
    }

    public function ludeka()
    {
        echo $this->view->render("site::pages/ludeka", [
            "title" => "Ludeka | ".site('name')
        ]);
    }

    public function spirit()
    {
        echo $this->view->render("site::pages/spirit", [
            "title" => "Ludens Spirit | ".site('name')
        ]);
    }

    public function suporte()
    {
        echo $this->view->render("site::pages/suporte", [
            "title" => "Suporte | ".site('name')
        ]);
    }

    public function perguntas()
    {
        echo $this->view->render("site::pages/perguntas", [
            "title" => "Perguntas | ".site('name')
        ]);
    }

    public function contato()
    {
        echo $this->view->render("site::pages/contato", [
            "title" => "Contato | ".site('name')
        ]);
    }

    public function login()
    {
        echo $this->view->render("site::pages/login", [
            "title" => "Login | ".site('name')
        ]);
    }

    public function auth()
    {

    }

    public function cadastro()
    {
        echo $this->view->render("site::pages/cadastro", [
            "title" => "Cadastro | ".site('name')
        ]);
    }

    public function register()
    {

    }

}