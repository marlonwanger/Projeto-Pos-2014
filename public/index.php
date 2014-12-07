<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


include '../vendor/autoload.php';

include '../application/Models/Onibus.php';


    if (isset($_GET['page']))
    {
        $pagina = ucfirst($_GET['page']);

        $class = "Models\\{$pagina}";

        $class = new $class();

        if (method_exists($class, 'index'))
            $class->index($_GET, $_POST);


    }
    else
    {
        include "../application/view/index/index.phtml";
    }

