<?php
/**
 * Created by PhpStorm.
 * User: José Luis
 * Date: 06/03/2023
 * Time: 11:01
 */

namespace Source\Controllers;

/**
 * Class Usuarios
 * @package Source\Controllers
 */
class Usuarios extends Controller
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
            echo $this->view->render("manager::pages/usuarios/cadastro", [
                "title" => "Manager | Cadastrar Usuários"
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
            echo $this->view->render("manager::pages/usuarios/listar", [
                "title" => "Manager | Listar Usuários"
            ]);
        }
        else
        {
            header("Location: ".url('manager'));
        }
    }
}
