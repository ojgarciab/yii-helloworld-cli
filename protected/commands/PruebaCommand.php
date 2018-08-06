<?php
class PruebaCommand extends CConsoleCommand
{
    public function run($args) {
        Yii::import('application.controllers.SiteController');
        $controlador = new SiteController('Pruebas');
        $controlador->prueba();
    }
}

