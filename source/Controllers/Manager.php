<?php
/**
 * Created by PhpStorm.
 * User: José Luis
 * Date: 06/03/2023
 * Time: 11:01
 */

namespace Source\Controllers;

use Source\Models\Admin;

/**
 * Class Manager
 * @package Source\Controllers
 */
class Manager extends Controller
{
    /**
     * @var Manager
     */
    private $manager;

    /**
     * Manager constructor.
     */
    public function __construct()
    {
        parent::__construct();
//        $this->manager = new Admin();
        if (session_status() !== PHP_SESSION_ACTIVE)
        {
            session_start();
        }
    }

    /**
     *
     */
    public function home()
    {
        echo $this->view->render("manager::pages/home", [
            "title" => "Home | Manager"
        ]);
    }

    /**
     *
     */
    public function login()
    {
        echo $this->view->render("manager::pages/login", [
            "title" => "Login | Manager"
        ]);
    }

    /**
     *
     */
    public function loginData()
    {
        $postData = $_POST;
        echo json_encode($postData);
    }

    /**
     *
     */
    public function logout()
    {
        session_destroy();
    }
}
