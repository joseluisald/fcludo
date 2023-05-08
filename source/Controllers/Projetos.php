<?php
/**
 * Created by PhpStorm.
 * User: José Luis
 * Date: 06/03/2023
 * Time: 11:01
 */

namespace Source\Controllers;

use Source\Models\ProjectModel;

/**
 * Class Projetos
 * @package Source\Controllers
 */
class Projetos extends Controller
{
    /**
     * @var Project
     */
    private $project;

    /**
     * @var Page    
    */
    private $page;

    /**
     * Manager constructor.
     */
    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['_user']) || empty($_SESSION['_user']))
        {
            header("Location: ".url('manager'));
        }
        $this->page = "projetos";
        $this->project = new ProjectModel();
    }

    /**
     *
     */
    public function cadastro()
    {
        echo $this->view->render("manager::pages/{$this->page}/cadastro", [
            "title" => "Manager | Cadastrar Projetos"
        ]);
    }

    /**
     *
     */
    public function listar()
    {
        echo $this->view->render("manager::pages/{$this->page}/listar", [
            "title" => "Manager | Listar Projetos",
            "projects" => $this->project->getProjects()
        ]);
    }

    /**
     *
     */
    public function add()
    {
        $file = '';
        if(isset($_FILES) && !empty($_FILES['image']))
        {
            $file = $_FILES;
        }
        $postData = $this->project->addProject($_POST, $file);
        if($postData['status'])
            $this->response->emit('Sucesso', 'Cadastro Realizado', 'success', '', $postData);
        else
            $this->response->emit('Error', 'Erro ao realizar o cadastro', 'error', '', $postData);
    }

    /**
     *
     */
    public function edit($data)
    {
        echo $this->view->render("manager::pages/{$this->page}/editar", [
            "title" => "Manager | Editar Projeto",
            "project" => $this->project->getProjectsById($data['id'])
        ]);
    }

    /**
     *
     */
    public function apoios()
    {
        echo $this->view->render("manager::pages/{$this->page}/apoios", [
            "title" => "Manager | Listar Apoios",
            "supports" => $this->project->getSupports()
        ]);
    }


    /**
     *
     */
    public function delete($data)
    {
        $postData = $this->project->delete($_POST, $file);
        if($postData['status'])
            $this->response->emit('Sucesso', 'Cadastro Realizado', 'success', '', $postData);
        else
            $this->response->emit('Error', 'Erro ao realizar o cadastro', 'error', '', $postData);
    }
}
