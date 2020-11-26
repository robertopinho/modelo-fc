<?php

namespace App\Controllers;

use FC\Controller\Action;
use FC\Model\Container;

class IndexController extends Action
{

	public function index()
	{
		$this->render('index');
		header('Location: /listagem_medicos_horarios');
		
	}
}
