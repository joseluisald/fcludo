<?php

/**
 *
 */
define('RAIZ', 			'fcludo');
// define("SITE",          "FC Ludo");
define("MINIFY",        FALSE);

define("SITE", [
    "name" => "FC Ludo",
    "desc" => "",
    "domain" => "",
    "locale" => "pt-br",
    "root" => "http://localhost/fcludo",
    "raiz" => "fcludo"
]);

define('DEV_IPS',       $_SERVER['REMOTE_ADDR']);
// define('DEV_IPS',        '');

define('RAND',          TRUE);

isset($_SERVER['HTTPS']) ? $protocolo = 'https' : $protocolo = 'http';
$actual = $protocolo."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$explode = explode(RAIZ, $actual);
$link = $explode[0].RAIZ;

define("URL_BASE", $link);

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

//
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

/**
 * Site Minify
*/
if($_SERVER['SERVER_NAME'] == "localhost")
{
    require __DIR__."/Minify.php";
}

$ips = explode(',', DEV_IPS);
$ip = $_SERVER['REMOTE_ADDR'];
if(!in_array($ip, $ips)) {
    ini_set('display_errors',0); error_reporting(0);
} else {
    ini_set('display_errors', 1); error_reporting(E_ALL);
}

/**
 *
 */
(RAND) ? define('RAND_NUM','?v_'.rand(100000,999999)) : define('RAND_NUM','');