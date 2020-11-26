<?php

namespace App\Controllers;

use FC\Controller\Action;
use FC\Model\Container;

class horarioController extends Action
{

    public function confighorarios()
    {

        $lista = Container::getModel('Medico');
        $medicos = $lista->listarMedicos();
        
        $this->render('confighorarios');
    }
    public function cadastrohorario()
    {
        $horario =  Container::getModel('Horario');
        $horario->__set('id_medico', $_POST['id_medico']);
        $horario->__set('data_horario', $_POST['data_horario']);
        $horario->salvar();
        $this->render('confighorarios');
    }
}
