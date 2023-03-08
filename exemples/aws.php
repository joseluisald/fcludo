<?php
/**
 * User: José Luis
 * Date: 02/03/2023
 * Time: 14:12
 */

require __DIR__."/../vendor/autoload.php";

use Source\Support\Aws;

$aws = new Aws();

//$result = $aws->upload(__DIR__.'/outra.jpg');
//
//var_dump($result);

$result = $aws->get("outra.jpg");

var_dump($result);

if(!$aws->error())
{
    var_dump(true);
}
else
{
    echo $aws->error()->getMessage();
}


