<?php
/**
* Created by fonseca
* Date: 05/12/14
* Time: 13:43
* Email: diego@cbk.com.br
*/

namespace Controller;


abstract class ControllerDAO extends \PDO
{
    abstract public function getTable();
    abstract public function getFields();

    public function __construct()
    {
        $dsn = sprintf("mysql:host=%s;dbname=%s", "localhost", "projetooo");

        parent::__construct($dsn, "root", "root");
    }

    public function buscar($id)
    {
        $fields = $this->getFields();

        $idField = $fields[0];

        $query = sprintf("SELECT * FROM %s WHERE $idField = ?", $this->getTable());

        $result = $this->prepare($query);

        $result->bindValue(1, $id);

        $result->execute();

        return $result->fetchObject();
    }

    public function listar()
    {
        $query = sprintf("SELECT * FROM %s", $this->getTable() );

        $result = $this->prepare($query);

        $result->execute();

        return $result->fetchAll();
    }

    public function salvar($dado)
    {
        $fields = $this->getFields();

        array_shift($fields);

        $colunas = [];

        foreach ($fields as $fielda)
            $colunas[] = '?';

        $sql = sprintf("INSERT INTO %s (%s) VALUES(%s)",
            $this->getTable(),
            implode(',', $fields), implode(',', $colunas));

        $stmt = $this->prepare($sql);

        $i = 1;

        foreach ($fields as $field)
        {
            $stmt->bindValue($i, $dado[$field]);
            $i++;
        }

        $stmt->execute();
    }

    public function editar($dados)
    {
        $fields = $this->getFields();

        $codField = $fields[0];

        array_shift($fields);

        $colunas = [];

        foreach ($fields as $field)
            $colunas[] = "{$field} = '{$dados[$field]}'";



        $sql = sprintf("UPDATE %s SET %s WHERE $codField = %s",
            $this->getTable(), implode(',', $colunas), $dados[$codField]);

        $stmt = $this->prepare($sql);

        $stmt->execute();
    }

    public function excluir($id)
    {
        $fields = $this->getFields();

        $codField = $fields[0];

        $query = sprintf("DELETE FROM %s WHERE $codField = :id", $this->getTable());


        $stmt = $this->prepare($query);

        $stmt->bindValue(":id",$id);

        $stmt->execute();

        return true;
    }

}