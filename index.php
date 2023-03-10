<?php
    require __DIR__."/vendor/autoload.php";

    use CoffeeCode\Router\Router;

    $router = new Router(URL_BASE);

    /*
     * Controller
     */
    $router->namespace("Source\Controllers");

    /*
     * Web
     */
    $router->group(null);
    $router->get("/", "Web:home");
    $router->get("/contato", "Web:contact");
    $router->get("/clientes", "Web:client");
    $router->post("/addClient", "Web:addClient");

    /*
    * Manager
    */
    $router->group("manager");
    $router->get("/", "Manager:login");
    $router->get("/home", "Manager:home");
    $router->get("/usuarios", "Manager:users");

    /*
     * Error
     */
    $router->group("ops");
    $router->get("/{errcode}", "Web:error");


    /*
     * Processo de dispacho das rotas
     */
    $router->dispatch();

    if($router->error())
    {
        $router->redirect("/ops/{$router->error()}");
    }

