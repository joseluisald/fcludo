<?php

/*
 * CSS
 */
unset($minCSS);
$minCSS = new \MatthiasMullie\Minify\CSS();
$minCSS->add(dirname(__DIR__, 1)."/assets/css/site.css");
$minCSS->add(dirname(__DIR__, 1)."/assets/css/bootstrap.min.css");
$minCSS->add(dirname(__DIR__, 1)."/assets/css/site_style.css");
$minCSS->add(dirname(__DIR__, 1)."/assets/css/site_mobile.css");
$minCSS->add(dirname(__DIR__, 1)."/assets/css/cookie.css");
$minCSS->add(dirname(__DIR__, 1)."/assets/css/toast.css");
$minCSS->add(dirname(__DIR__, 1)."/assets/css/loader.css");
$minCSS->minify(dirname(__DIR__, 1)."/assets/site.min.css");

unset($minCSS);
$minCSS = new \MatthiasMullie\Minify\CSS();
$minCSS->add(dirname(__DIR__, 1)."/assets/css/manager.css");
$minCSS->add(dirname(__DIR__, 1)."/assets/css/bootstrap.min.css");
$minCSS->add(dirname(__DIR__, 1)."/assets/css/manager_style.css");
$minCSS->add(dirname(__DIR__, 1)."/assets/css/manager_mobile.css");
$minCSS->add(dirname(__DIR__, 1)."/assets/css/toast.css");
$minCSS->add(dirname(__DIR__, 1)."/assets/css/loader.css");
$minCSS->add(dirname(__DIR__, 1)."/assets/css/boxicons.min.css");
$minCSS->minify(dirname(__DIR__, 1)."/assets/manager.min.css");

/*
 * JS
 */
unset($minJS);
$minJS = new \MatthiasMullie\Minify\JS();
$minJS->add(dirname(__DIR__, 1)."/assets/js/jquery.js");
$minJS->add(dirname(__DIR__, 1)."/assets/js/bootstrap.bundle.min.js");
$minJS->add(dirname(__DIR__, 1)."/assets/js/fontawesome.js");
$minJS->add(dirname(__DIR__, 1)."/assets/js/jquery.validate.min.js");
$minJS->add(dirname(__DIR__, 1)."/assets/js/validate.pt-BR.js");
$minJS->add(dirname(__DIR__, 1)."/assets/js/cookie.js");
$minJS->add(dirname(__DIR__, 1)."/assets/js/toast.js");
$minJS->add(dirname(__DIR__, 1)."/assets/js/site.js");
$minJS->minify(dirname(__DIR__, 1)."/assets/site.min.js");

unset($minJS);
$minJS = new \MatthiasMullie\Minify\JS();
$minJS->add(dirname(__DIR__, 1)."/assets/js/jquery.js");
$minJS->add(dirname(__DIR__, 1)."/assets/js/bootstrap.bundle.min.js");
$minJS->add(dirname(__DIR__, 1)."/assets/js/fontawesome.js");
$minJS->add(dirname(__DIR__, 1)."/assets/js/jquery.validate.min.js");
$minJS->add(dirname(__DIR__, 1)."/assets/js/validate.pt-BR.js");
$minJS->add(dirname(__DIR__, 1)."/assets/js/toast.js");
$minJS->add(dirname(__DIR__, 1)."/assets/js/manager.js");
$minJS->minify(dirname(__DIR__, 1)."/assets/manager.min.js");