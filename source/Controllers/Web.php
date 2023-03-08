<?php
/**
 * Created by PhpStorm.
 * User: José Luis
 * Date: 06/03/2023
 * Time: 11:01
 */

namespace Source\Controllers;

use Source\Models\User;

/**
 * Class Web
 * @package Source\Controllers
 */
class Web extends Controller
{
    /**
     * @var User
     */
    private $users;

    /**
     * Web constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->users = new User();
    }

    /**
     *
     */
    public function home()
    {
        echo $this->view->render("site::pages/home", [
            "title" => "Home | ".SITE,
            "users" => $this->users->getUsers()
        ]);
    }

    /**
     *
     */
    public function client()
    {
        echo $this->view->render("site::pages/client", [
            "title" => "Cliente | ".SITE
        ]);
    }

    /**
     *
     */
    public function addClient()
    {
        $postData = $this->users->addClient($_POST);
        echo json_encode($postData);
    }

    /**
     * @param $data
     */
    public function contact($data)
    {
        echo $this->view->render("site::pages/contact", [
            "title" => "Contato | ".SITE
        ]);
    }
}