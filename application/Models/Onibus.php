<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/12/14
 * Time: 02:27
 */

namespace Models;


use Controller\AbstractController;

class Onibus extends AbstractController
{
    public function getTable()
    {
        return 'onibus';
    }

    public function getViewPage()
    {
        return __DIR__.'/../view/carro.php';
    }

    public function getFields()
    {
        return ['cod_onibus', 'marca', 'modelo','ano','poltronas','empresa'];
    }
} 