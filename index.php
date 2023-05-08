<?php
    ob_start();
    header('Content-type: text/html; charset=UTF-8');
    header('Set-Cookie: fcludo=true; SameSite=None;Secure');
    header("Access-Control-Allow-Origin: *");

    /*
    * Inicia a sessão
    */
    if (session_status() !== PHP_SESSION_ACTIVE)
    {
        session_start();
    }

    require __DIR__."/vendor/autoload.php";

    use CoffeeCode\Router\Router;

    $router = new Router(URL_BASE);

    /*
     * Controller
     */
    $router->namespace("Source\Controllers");

    include __DIR__.'/routes.php';

    /*
     * Error
     */
    $router->group("ops");
    $router->get("/{errcode}", "Web:error");


    /*
     * Processo de dispacho das rotas
     */
    $router->dispatch();

    /*
     * Error
     */
    if($router->error())
    {
        $router->redirect("/ops/{$router->error()}");
    }
    ob_end_flush();