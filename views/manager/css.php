<?php if(!MINIFY){ ?>
    <link rel="stylesheet" href="<?=url("assets/css/manager.css").RAND_NUM?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=url("assets/css/manager_style.css").RAND_NUM?>">
    <link rel="stylesheet" href="<?=url("assets/css/manager_mobile.css").RAND_NUM?>">
    <link rel="stylesheet" href="<?=url("assets/css/toast.min.css")?>">
    <link rel="stylesheet" href="<?=url("assets/css/loader.css")?>">
    <link rel="stylesheet" href="<?=url("assets/css/boxicons.min.css")?>">
<?php } else { ?>
    <link rel="stylesheet" href="<?=url("assets/manager.min.css")?>">
<?php } ?>