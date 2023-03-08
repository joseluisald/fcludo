<?php
/**
 * Created by PhpStorm.
 * User: José Luis
 * Date: 06/03/2023
 * Time: 14:19
 */

namespace Source\Controllers;

use League\Plates\Engine;

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
     * Controller constructor.
     */
    public function __construct()
    {
        $this->view = new Engine();
        $this->view->addFolder('manager', __DIR__."/../../views/manager");
        $this->view->addFolder('site', __DIR__."/../../views/site");
    }

    /**
     * @param $data
     */
    public function error($data)
    {
        echo $this->view->render("site::pages/error", [
            "title" => "Error {$data['errcode']} | ".SITE,
            "error" => $data['errcode']
        ]);
    }
}