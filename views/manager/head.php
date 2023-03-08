<?php

    $op = new \CoffeeCode\Optimizer\Optimizer();

    echo $op->optimize(
        $this->e($title),
    "Is a compact and easy-to-use tag creator to optimize your site",
    "https://www.upinside.com.br/coffeecode/optimizer/example/",
    "https://www.upinside.com.br/uploads/images/2017/11/curso-de-html5-preparando-ambiente-de-trabalho-aula-02-1511276983.jpg"
    )->render();

?>

<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
