<?php

namespace App;

use FC\Init\Bootstrap;

class Route extends Bootstrap
{

	protected function initRoutes()
	{
		// HOME
		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		// MEDICO
		$routes['cadastro_medico'] = array(
			'route' => '/cadastro_medico',
			'controller' => 'medicoController',
			'action' => 'cadastroMedico'
		);
		$routes['cadastro'] = array(
			'route' => '/cadastro',
			'controller' => 'medicoController',
			'action' => 'cadastro'
		);
		$routes['editar_medico'] = array(
			'route' => '/editar_medico',
			'controller' => 'medicoController',
			'action' => 'editarMedico'
		);
		$routes['editar'] = array(
			'route' => '/editar',
			'controller' => 'medicoController',
			'action' => 'editar'
		);

		// HORARIO
		$routes['confighorarios'] = array(
			'route' => '/confighorarios',
			'controller' => 'horarioController',
			'action' => 'confighorarios'
		);

		$routes['listagem_medicos_horarios'] = array(
			'route' => '/listagem_medicos_horarios',
			'controller' => 'listagemController',
			'action' => 'listagemMedicosHorarios'
		);
		$routes['cadastrohorario'] = array(
			'route' => '/cadastrohorario',
			'controller' => 'horarioController',
			'action' => 'cadastrohorario'
		);


		$this->setRoutes($routes);
	}
}
