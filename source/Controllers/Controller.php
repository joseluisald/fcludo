<?php
/**
 * Created by PhpStorm.
 * User: José Luis
 * Date: 06/03/2023
 * Time: 14:19
 */

namespace Source\Controllers;

use League\Plates\Engine;
use Source\Support\Response;
// use Source\Support\Session;

/**
 * Class Controller
 * @package Source\Controllers
 */
class Controller
{
    /**
     * @var Engine
     */
    protected $view;
    /**
     * @var Response
     */
    protected $response;
    /**
     * @var Session
     */
    // protected $session;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->view = new Engine();
        $this->view->addFolder('manager', __DIR__."/../../views/manager");
        $this->view->addFolder('site', __DIR__."/../../views/site");
        $this->response = new Response();
        // $this->session = new Session();
    }

    /**
     * @param $data
     */
    public function error($data)
    {
        echo $this->view->render("site::pages/error", [
            "title" => "Error {$data['errcode']} | ".site('name'),
            "error" => $data['errcode']
        ]);
    }

    /**
     * @param $data
     */
    protected function object_to_array($data)
    {
        $result = [];
        foreach ($data as $key => $value)
        {
            $result[$key] = $value->data();
        }
        return $result;
    }
}