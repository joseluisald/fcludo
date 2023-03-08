<?php
/**
 * Created by PhpStorm.
 * User: José Luis
 * Date: 03/03/2023
 * Time: 17:40
 */

require __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->namespace("Source\Controllers");


$router->group(null);
$router->get("/", "Web:home");
$router->get("/contato", "Web:contact");
$router->post("/contato", "Web:contactSender");


$router->group("blog");
$router->get("/", "Web:blog");
$router->get("/{post_uri}", "Web:post");
$router->get("/categoria/{post_uri}", "Web:category");


$router->group("ops");
$router->get("/{errcode}", "Web:error");


$router->dispatch();

if($router->error())
{
    $router->redirect("/ops/{$router->error()}");
}