<?php

init_set("display_errors", 1);

include "../vendor/autoload.php";

use App\Controller\IndexController;
use App\Controller\ProductController;

$c = new IndexController();
//$c->indexAction();
$c->loginaction();

$p = new ProductController();
$p->listAction();
$p->addAction();
$p->editAction();

//echo "Ola mundo";