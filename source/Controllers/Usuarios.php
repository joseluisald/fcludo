<?php
/**
 * Created by PhpStorm.
 * User: José Luis
 * Date: 06/03/2023
 * Time: 11:01
 */

namespace Source\Controllers;

use CoffeeCode\Paginator\Paginator;
use Source\Models\UserModel;
use Source\Models\ImageModel;

/**
 * Class Usuarios
 * @package Source\Controllers
 */
class Usuarios extends Controller
{
    /**
     * @var User
     */
    private $user;
    /**
     * @var Image
     */
    private $image;
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
        $this->page = "usuarios";
        $this->user = new UserModel();
        $this->image = new ImageModel();
    }

    /**
     *
     */
    public function cadastro()
    {
        echo $this->view->render("manager::pages/{$this->page}/cadastro", [
            "title" => "Manager | Cadastrar Usuários"
        ]);
    }

    /**
     *
     */
    public function listar()
    {
        echo $this->view->render("manager::pages/{$this->page}/listar", [
            "title" => "Manager | Listar Usuários",
            "users" => $this->user->getUsers()
        ]);
    }

    public function getMessagesAjax()
    {
        $page = filter_input(INPUT_POST, "page", FILTER_UNSAFE_RAW);
        $count = $this->messages->find()->count();

        $paginator = new Paginator("menssagens?page=");
        $paginator->pager($count, 3, $page, 2);
        $messages = $this->user->getUsersAjax($paginator->limit(), $paginator->offset());

        $this->response->json([
            "page" => $paginator->page(),
            "pages" => $paginator->pages(),
            "messages" => $this->object_to_array($messages),
            "paginator" => $paginator->render(),
            "count" => $count
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
        $postData = $this->user->addUser($_POST, $file);
        if($postData['status'])
            $this->response->emit('Sucesso', 'Cadastro Realizado', 'success', '', $postData);
        else
            $this->response->emit('Error', 'Erro ao realizar o cadastro', 'error', '', $postData);
    }

    /**
     *
     */
    public function editar($data)
    {
        echo $this->view->render("manager::pages/{$this->page}/editar", [
            "title" => "Manager | Editar Usuário",
            "user" => $this->user->getUsersById($data['id'])
        ]);
    }

    /**
     *
     */
    public function edit()
    {
        $file = '';
        if(isset($_FILES) && !empty($_FILES['image']))
        {
            $file = $_FILES;
        }
        $postData = $this->user->editUser($_POST, $file);
        if($postData['status'])
            $this->response->emit('Sucesso', 'Cadastro Alterado', 'success', 'usuarios', ['postData' => $postData, 'action' => 'edit']);
        else
            $this->response->emit('Error', 'Erro ao realizar as alterações', 'error', 'usuarios', ['postData' => $postData, 'action' => 'edit']);
    }

    /**
     *
     */
    public function delete()
    {
        $postData = $this->user->deleteUser($_POST['id']);
        if($postData)
            $this->response->emit('Sucesso', 'Cadastro Deleteado', 'success', 'usuarios', ['status' => $postData, 'action' => 'delete']);
        else
            $this->response->emit('Error', 'Erro ao deletar o cadastro', 'error', 'usuarios', ['status' => $postData, 'action' => 'delete']);
    }

}
