<?php
/**
 * Created by PhpStorm.
 * User: José Luis
 * Date: 06/03/2023
 * Time: 11:01
 */

namespace Source\Controllers;

use Source\Models\FaqModel;
use Source\Models\CustomerModel;
use Source\Models\MessageModel;

/**
 * Class Web
 * @package Source\Controllers
 */
class Web extends Controller
{
    /**
     * @var Faq
     */
    private $faq;
    /**
     * @var MessageModel
     */
    private $message;
    /**
     * @var User
     */
    private $customer;

    /**
     * Web constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->faq = new FaqModel();
        $this->message = new MessageModel();
        $this->customer = new CustomerModel();
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

    /**
     * @return void
     */
    public function quemSomos()
    {
        echo $this->view->render("site::pages/quemSomos", [
            "title" => "Quem Somos | ".site('name')
        ]);
    }

    /**
     * @return void
     */
    public function projetos()
    {
        echo $this->view->render("site::pages/projetos", [
            "title" => "Projetos | ".site('name')
        ]);
    }

    /**
     * @return void
     */
    public function lab()
    {
        echo $this->view->render("site::pages/lab", [
            "title" => "Ludens Lab | ".site('name')
        ]);
    }

    /**
     * @return void
     */
    public function ludeka()
    {
        echo $this->view->render("site::pages/ludeka", [
            "title" => "Ludeka | ".site('name')
        ]);
    }

    /**
     * @return void
     */
    public function spirit()
    {
        echo $this->view->render("site::pages/spirit", [
            "title" => "Ludens Spirit | ".site('name')
        ]);
    }

    /**
     * @return void
     */
    public function suporte()
    {
        echo $this->view->render("site::pages/suporte", [
            "title" => "Suporte | ".site('name')
        ]);
    }

    /**
     * @return void
     */
    public function perguntas()
    {
        echo $this->view->render("site::pages/perguntas", [
            "title" => "Perguntas | ".site('name'),
            "faqs" => $this->faq->getFaqs()
        ]);
    }

    /**
     * @return void
     */
    public function contato()
    {
        echo $this->view->render("site::pages/contato", [
            "title" => "Contato | ".site('name')
        ]);
    }

    /**
     * @return void
     */
    public function contact()
    {
        $postData = $this->message->addMessage($_POST);
        if($postData)
            $this->response->emit('Sucesso', 'Menssagem enviada', 'success', '', ['reset' => true]);
        else
            $this->response->emit('Error', 'Erro ao enviar a menssagem', 'error', '', ['reset' => false]);
    }

    /**
     * @return void
     */
    public function login()
    {
        echo $this->view->render("site::pages/login", [
            "title" => "Login | ".site('name')
        ]);
    }

    /**
     * @return void
     */
    public function auth()
    {
        $auth = $this->customer->auth($_POST);
        if($auth)
        {
            $_SESSION['_customer'] = $auth->data();
            // $this->session->set('_customer', $auth->data());

            $image = $this->customer->getCustomersImage($auth->data()->id);
            if($image || !is_null($image))
                $_SESSION['_customer']->image = $image->data()->image;
                // $this->session->set('_customerImage', $image->data()->image);
            else
                $_SESSION['_customer']->image = null;
                // $this->session->set('_customerImage', null);

            $this->response->emit('Sucesso', 'Bem vindo '.$auth->data()->name, 'success', 'login', ['session' => $_SESSION, 'logged' => true]);
        }
        else
        {
            $this->response->emit('Error', 'Erro ao logar-se. Verifique os dados inseridos', 'error');
        }
    }

    /**
     * @return void
     */
    public function cadastro()
    {
        echo $this->view->render("site::pages/cadastro", [
            "title" => "Cadastro | ".site('name')
        ]);
    }

    /**
     * @return void
     */
    public function register()
    {
        $file = '';
        if(isset($_FILES) && !empty($_FILES['image']))
        {
            $file = $_FILES;
        }
        $postData = $this->customer->addCustomer($_POST, $file);
        if($postData['status'])
            $this->response->emit('Sucesso', 'Cadastro Realizado', 'success', '', ['reset' => true]);
        else
            $this->response->emit('Error', 'Erro ao realizar o cadastro', 'error', '', ['reset' => false]);
    }

     /**
     *
     */
    public function logout()
    {
        session_destroy();
        header("Location: ".url());
    }

}