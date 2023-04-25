<?php
/**
 * Created by PhpStorm.
 * User: José Luis
 * Date: 06/03/2023
 * Time: 11:01
 */

namespace Source\Controllers;

/**
 * Class Projetos
 * @package Source\Controllers
 */
class Projetos extends Controller
{
    /**
     * Manager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     */
    public function cadastro()
    {
        if(isset($_SESSION['_user']) && !empty($_SESSION['_user']))
        {
            echo $this->view->render("manager::pages/projetos/cadastro", [
                "title" => "Manager | Cadastrar Projetos"
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
    public function listar()
    {
        if(isset($_SESSION['_user']) && !empty($_SESSION['_user']))
        {
            echo $this->view->render("manager::pages/projetos/listar", [
                "title" => "Manager | Listar Projetos"
            ]);
        }
        else
        {
            header("Location: ".url('manager'));
        }
    }
}
