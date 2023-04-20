<?php

/*
 * Web
 */
$router->group(null);

$router->get("/", "Web:home", "web.home");
$router->get("/quem-somos", "Web:quemSomos", "web.quemSomos");
$router->get("/projetos", "Web:projetos", "web.projetos");
$router->get("/lab", "Web:lab", "web.lab");
$router->get("/ludeka", "Web:ludeka", "web.ludeka");
$router->get("/spirit", "Web:spirit", "web.spirit");
$router->get("/suporte", "Web:suporte", "web.suporte");
$router->get("/perguntas", "Web:perguntas", "web.perguntas");
$router->get("/contato", "Web:contato", "web.contato");

$router->get("/login", "Web:login", "web.login");
$router->get("/auth", "Web:auth", "web.auth");
$router->get("/cadastro", "Web:cadastro", "web.cadastro");
$router->get("/register", "Web:register", "web.register");
/*
* Manager
*/
$router->group("manager");

$router->get("/", "Manager:login", "manager.login");
$router->post("/auth", "Manager:auth", "manager.auth");
$router->get("/logout", "Manager:logout", "manager.logout");
$router->get("/dashboard", "Manager:dashboard", "manager.dashboard");