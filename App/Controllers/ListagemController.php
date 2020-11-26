<?php

namespace App\Controllers;

use FC\Controller\Action;
use FC\Model\Container;

class listagemController extends Action
{
    public function listagemMedicosHorarios()
    {
        $lista = Container::getModel('Medico');
        $medicos = $lista->listarMedicos();
        
        $this->view->medicos = $medicos;
        $this->render('listagemMedicosHorarios');
    }
    public function listagemHorariosMedicos()
    {
        $lista = Container::getModel('Horario');
        $horario = $lista->listarHorarios();
    }
}
