<?php if(!MINIFY){ ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=url("assets/css/bootstrap.min.css")?>">
    <link rel="stylesheet" href="<?=url("assets/css/site.css").RAND_NUM?>">
    <link rel="stylesheet" href="<?=url("assets/css/site_style.css").RAND_NUM?>">
    <link rel="stylesheet" href="<?=url("assets/css/site_mobile.css").RAND_NUM?>">
    <link rel="stylesheet" href="<?=url("assets/css/toast.min.css")?>">
    <link rel="stylesheet" href="<?=url("assets/css/cookie.min.css")?>">
    <link rel="stylesheet" href="<?=url("assets/css/loader.css")?>">
<?php } else { ?>
    <link rel="stylesheet" href="<?=url("assets/site.min.css")?>">
<?php } ?>