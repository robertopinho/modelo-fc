<?php

namespace App\Models;

use FC\Model\Model;

class Horario extends Model
{
    private $id;
    private $id_medico;
    private $data_horario;
    private $horario_agendado;
    private $data_criacao;
    private $data_alteracao;

    public function __get($atributo)
    {
        return $this->$atributo;
    }
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }


    public function salvar()
    {
        $query = "INSERT INTO horario(id, id_medico, data_horario, horario_agendado, data_criacao, data_alteracao)VALUES (:id_medico, :data_horario,horario_agendado,data_criacao,data_alteracao)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':data_horario', $this->__get('2'));
        $stmt->bindValue(':data_horario', $this->__get('data_horario'));
        $stmt->bindValue(':horario_agendado', $this->__get('horario_agendado'));
        echo '<pre>';
        print_r($stmt);
        echo '</pre>';
        $stmt->execute();

        return $this;
    }
    public function listarHorarios()

    {
        $query = "select * from horario";
        //  where id_medico = :id_medico order by data_horario
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id_medico', $this->__get('id_medico'));
        $stmt->execute();

        // echo '<pre>';
        // print_r($stmt);
        // echo '</pre>';

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
