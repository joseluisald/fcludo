<?php

/**
 *
 */
define("URL_BASE", "http://localhost/estrutura_luis");
define("SITE", "Luis");

/**
 * Configuração do Banco de Dados
 */
const DATA_LAYER_CONFIG = [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "crud",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
];

/**
 * Configuração do Servidor de Email
 */
define("MAIL_CONFIG", [
    "host" => "cre4te.com.br",
    "port" => "587",
    "user" => "casamais@createmail.com.br",
    "passwd" => "Casamais*co987",
    "from_name" => "José Luis",
    "from_email" => "jaldrighi@gmail.com",
]);

/**
 * Configuração do Servidor AWS
 */
define("AWS", [
    "BUCKET_NAME" => "storageluis",
    "AWS_REGION" => "sa-east-1",
    "ACCESS_KEY_ID" => "AKIARJMRNSZ2WZ56VHKG",
    "SECRET_ACCESS_KEY" => "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"
]);


/**
 * @param string|null $uri
 * @return string
 */
function url(string $uri = null): string
{
    if($uri) {
        return URL_BASE."/{$uri}";
    }
    return URL_BASE;
}