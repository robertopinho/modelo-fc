<?php

namespace App\Controllers;

use FC\Controller\Action;
use FC\Model\Container;

class MedicoController extends Action
{

	public function cadastroMedico()
	{
		$this->limpaCampos();

		$this->view->erroCadastro = false;
		$this->view->sucessoCadastro = false;

		$this->render('cadastroMedico');
	}
	public function cadastro()
	{

		$medico =  Container::getModel('Medico');
		$medico->__set('nome', $_POST['nome']);
		$medico->__set('email', $_POST['email']);
		$medico->__set('senha', md5($_POST['senha']));

		if ($medico->validarCadastro() && count($medico->getMedicoEmail()) == 0) {
			$medico->salvar();
			$this->view->erroCadastro = false;
			$this->view->sucessoCadastro = true;
			$this->limpaCampos();
			$this->render('cadastroMedico');
		} else {
			$this->view->medico = array(
				'nome' => $_POST['nome'],
				'email' => $_POST['email'],
				'senha' => $_POST['senha']
			);
			$this->view->sucessoCadastro = false;
			$this->view->erroCadastro = true;
			$this->render('cadastroMedico');
			$this->limpaCampos();
		}
	}
	public function editarMedico()
	{
		$medico = Container::getModel('Medico');
		$medico->__set('id', 2);
		$this->view->medico = $medico->listarMedico();
		$this->render('editarMedico');
	}
	public function editar()
	{
		$medico =  Container::getModel('Medico');
		$medico->__set('nome', $_POST['nome']);
		$medico->__set('senha', md5($_POST['senha']));
		$medico->editar();
	}

	public function configurarHorario()
	{
		$medico = Container::getModel('Medico');
		$medico->__set('id', 2);
		$this->view->medico = $medico->listarMedico();
		$this->render('editarMedico');
	}
	public function configurar()
	{
		$medico =  Container::getModel('Medico');
		$medico->__set('nome', $_POST['nome']);

		$medico->configurar();
	}
	public function limpaCampos()
	{
		$this->view->medico = array(
			'nome' => '',
			'email' => '',
			'senha' => ''
		);
	}
}
