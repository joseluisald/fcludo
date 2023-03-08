<?php
/**
 * User: José Luis
 * Date: 02/03/2023
 * Time: 14:12
 */

require __DIR__."/vendor/autoload.php";
use Source\Support\Email;

$email = new Email();

$email->add(
    "Olá mundo. Esse é o meu segundo Email",
    "<h1>Estou apenas testando</h1><br>Espero que tenha funcionado",
    "José Luis",
    "luis@create.art.br"
);

$email->attach(
    "assets/images/moto_carro.jpg",
    "Moto e Carro"
);

$email->send();

if(!$email->error())
{
    var_dump(true);
}
else
{
    echo $email->error()->getMessage();
}


