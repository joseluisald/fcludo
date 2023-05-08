<?php
/**
 * Created by PhpStorm.
 * User: José Luis
 * Date: 06/03/2023
 * Time: 11:01
 */

namespace Source\Controllers;

use Source\Models\FaqModel;

/**
 * Class Faq
 * @package Source\Controllers
 */
class Faq extends Controller
{
    /**
     * @var Faq
     */
    private $faq;    
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
        $this->page = "faq";
        $this->faq = new FaqModel();
    }

    /**
     *
     */
    public function cadastro()
    {
        echo $this->view->render("manager::pages/{$this->page}/cadastro", [
            "title" => "Manager | Cadastrar FAQ"
        ]);
    }

    /**
     *
     */
    public function listar()
    {
        echo $this->view->render("manager::pages/{$this->page}/listar", [
            "title" => "Manager | Listar FAQs",
            "faqs" => $this->faq->getFaqs()
        ]);
    }

    /**
     *
     */
    public function add()
    {
        $postData = $this->faq->addFaq($_POST);
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
            "title" => "Manager | Editar FAQ",
            "faq" => $this->faq->getFaqsById($data['id'])
        ]);
    }

    /**
     *
     */
    public function edit()
    {
        $postData = $this->faq->editFaq($_POST);
        if($postData['status'])
            $this->response->emit('Sucesso', 'Cadastro Alterado', 'success', '', $postData);
        else
            $this->response->emit('Error', 'Erro ao realizar as alterações', 'error', '', $postData);
    }

    /**
     *
     */
    public function delete($data)
    {

    }

}
