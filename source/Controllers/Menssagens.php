<?php

namespace Source\Controllers;

use CoffeeCode\Paginator\Paginator;
use Source\Models\MessageModel;

/**
 *
 */
class Menssagens extends Controller
{
    /**
     * @var MessageModel
     */
    private $messages;
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
        $this->page = "menssagens";
        $this->messages = new MessageModel();
    }

    /**
     *
     */
    public function listar()
    {
        echo $this->view->render("manager::pages/{$this->page}/listar", [
            "title" => "Manager | Lista de Menssagens"
        ]);
    }

    public function getMessagesAjax()
    {
        $page = filter_input(INPUT_POST, "page", FILTER_UNSAFE_RAW);
        $count = $this->messages->find()->count();

        $paginator = new Paginator("menssagens?page=");
        $paginator->pager($count, 3, $page, 2);
        $messages = $this->messages->getMessagesAjax($paginator->limit(), $paginator->offset());

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
    public function readMessage()
    {
        $this->response->json($this->messages->readMessage($_POST['id'])->data());
    }
}