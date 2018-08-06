<?php
class PruebaCommand extends CConsoleCommand
{
    public function run($args) {
/*        Yii::import('./controllers/');*/
        $controlador = new SiteController('Pruebas');
        $controlador->prueba();
    }
}

