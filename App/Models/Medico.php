<?php

namespace App\Models;

use FC\Model\Model;

class Medico extends Model
{
    private $id;
    private $nome;
    private $email;
    private $senha;

    public function __get($atributo)
    {
        return $this->$atributo;
    }
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    public function listarMedico()
    {
        $query = "select nome from medico where id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $this->__get('id'));
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    public function listarMedicos()
    {
        $query = "select id, nome from medico";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function salvar()
    {
        $query = "insert into medico(nome, email, senha)values(:nome, :email, :senha)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':nome', $this->__get('nome'));
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->execute();
        return $this;
    }
    public function editar()
    {
        $query = "insert into medico(nome, email, senha)values(:nome, :email, :senha)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':nome', $this->__get('nome'));
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->execute();
        return $this;
    }

    public function validarCadastro()
    {
        $valido = true;
        if (strlen($this->__get('nome')) < 3) {
            $valido = false;
        }
        if (strlen($this->__get('email')) < 5) {
            $valido = false;
        }
        if (strlen($this->__get('senha')) < 5) {
            $valido = false;
        }

        return $valido;
    }
    public function getMedicoEmail()
    {
        $query = "select nome, email from medico where email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
