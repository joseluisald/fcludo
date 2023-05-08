<?php if(!MINIFY){ ?>
    <link rel="stylesheet" href="<?=url("assets/css/bootstrap.min.css")?>">
    <link rel="stylesheet" href="<?=url("assets/css/manager.css").RAND_NUM?>">
    <link rel="stylesheet" href="<?=url("assets/css/manager_style.css").RAND_NUM?>">
    <link rel="stylesheet" href="<?=url("assets/css/manager_mobile.css").RAND_NUM?>">
    <link rel="stylesheet" href="<?=url("assets/css/toast.min.css")?>">
    <link rel="stylesheet" href="<?=url("assets/css/loader.css")?>">
    <link rel="stylesheet" href="<?=url("assets/css/boxicons.min.css")?>">
<?php } else { ?>
    <link rel="stylesheet" href="<?=url("assets/manager.min.css")?>">
<?php } ?>