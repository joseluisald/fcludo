<?php

/*
 * Web
 */
$router->group(null);

$router->get("/", "Web:home", "web.home");
$router->get("/quem_somos", "Web:quemSomos", "web.quemSomos");
$router->get("/projetos", "Web:projetos", "web.projetos");
$router->get("/lab", "Web:lab", "web.lab");
$router->get("/ludeka", "Web:ludeka", "web.ludeka");
$router->get("/spirit", "Web:spirit", "web.spirit");
$router->get("/suporte", "Web:suporte", "web.suporte");
$router->get("/perguntas", "Web:perguntas", "web.perguntas");
$router->get("/contato", "Web:contato", "web.contato");

$router->get("/login", "Web:login", "web.login");
$router->get("/cadastro", "Web:cadastro", "web.cadastro");

$router->post("/auth", "Web:auth", "web.auth");
$router->post("/contact", "Web:contact", "web.contact");
$router->post("/register", "Web:register", "web.register");
$router->get("/logout", "Web:logout", "web.logout");

/*
* Manager
*/
$router->group("manager");

$router->get("/", "Manager:login", "manager.login");
$router->post("/auth", "Manager:auth", "manager.auth");
$router->get("/logout", "Manager:logout", "manager.logout");
$router->get("/dashboard", "Manager:dashboard", "manager.dashboard");

/*
* Usuarios
*/
$router->get("/usuarios", "Usuarios:listar", "usuarios.listar");
$router->get("/usuarios/cadastro", "Usuarios:cadastro", "usuarios.cadastro");
$router->get("/usuarios/editar/{id}", "Usuarios:editar", "usuarios.editar");

$router->post("/usuarios/add", "Usuarios:add", "usuarios.add");
$router->post("/usuarios/edit", "Usuarios:edit", "usuarios.edit");
$router->post("/usuarios/delete", "Usuarios:delete", "usuarios.delete");

/*
* Projetos
*/
$router->get("/projetos", "Projetos:listar", "projetos.listar");
$router->get("/projetos/cadastro", "Projetos:cadastro", "projetos.cadastro");
$router->get("/projetos/editar/{id}", "Projetos:editar", "projetos.editar");
$router->get("/projetos/apoios", "Projetos:apoios", "projetos.apoios");

$router->post("/projetos/add", "Projetos:add", "projetos.add");
$router->post("/projetos/edit", "Projetos:edit", "projetos.edit");
$router->post("/projetos/delete", "Projetos:delete", "projetos.delete");

/*
* Faq
*/
$router->get("/faq", "Faq:listar", "faq.listar");
$router->get("/faq/cadastro", "Faq:cadastro", "faq.cadastro");
$router->get("/faq/editar/{id}", "Faq:editar", "faq.editar");

$router->post("/faq/add", "Faq:add", "faq.add");
$router->post("/faq/edit", "Faq:edit", "faq.edit");
$router->post("/faq/delete", "Faq:delete", "faq.delete");

/*
* Menssagens
*/
$router->get("/menssagens", "Menssagens:listar", "menssagens.listar");
$router->get("/menssagens/cadastro", "Menssagens:cadastro", "menssagens.cadastro");
$router->get("/menssagens/editar/{id}", "Menssagens:editar", "menssagens.editar");

$router->POST("/menssagens/readMessage", "Menssagens:readMessage", "menssagens.readMessage");
$router->POST("/menssagens/getMessagesAjax", "Menssagens:getMessagesAjax", "menssagens.getMessagesAjax");