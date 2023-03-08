<?php

    require __DIR__.'/vendor/autoload.php';

 use Source\Models\User;

// FIND ALL
 $user = new User();
 $list = $user->find()->fetch(true);

 foreach($list as $item)
 {
     var_dump($item->data());
 }

 // SAVE
$user = new User();
$user->name = 'Luis Aldrighi';
$user->email = 'luis@create.inf.br';
$user->fone = '53981302738';
$user->data_nascimento = '1993-06-30';
$user->save();


// UPDATE
$user = (new User())->findById(9);
$user->name = 'Aldrighi';
$user->email = 'joseluis@create.inf.br';
$user->save();

// DELETE
$user = (new User())->findById(10);
$user->destroy();
var_dump($user);