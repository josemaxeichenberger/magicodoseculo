<?php
require_once 'ConexaoMysql.php';
class modulos extends ConexaoMysql
{
    public $id;
    public $nome;
    public $status;
    public $apresentacao;
    public function getId()
    {
        return $this->id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getApresentacao()
    {
        return $this->apresentacao;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function setApresentacao($apresentacao)
    {
        $this->apresentacao = $apresentacao;
    }
    public function Insert()
    {
        $modulos = $this->pdo->prepare("INSERT INTO modulos (
            id,
            nome,
            status,
            apresentacao,
        ) VALUES (
            :id,
            :nome,
            :status,
            :apresentacao
        )");
        $modulos->bindValue(':id', $this->getId());
        $modulos->bindValue(':nome', $this->getNome());
        $modulos->bindValue(':status', $this->getStatus());
        $modulos->bindValue(':apresentacao', $this->getApresentacao());
        try {
            return $modulos->execute();
        } catch (Exception $retorno) {
            return $retorno->getMessage();
        }
    }
    public function Update()
    {
        $modulos = $this->pdo->prepare("UPDATE modulos SET
            nome = :nome,
            status = :status,
            apresentacao = :apresentacao
        WHERE  id = :id
        ");
        $modulos->bindValue(':id', $this->getId());
        $modulos->bindValue(':nome', $this->getNome());
        $modulos->bindValue(':status', $this->getStatus());
        $modulos->bindValue(':apresentacao', $this->getApresentacao());
        try {
            return $modulos->execute();
        } catch (Exception $retorno) {
            return $retorno->getMessage();
        }
    }
    public function Delete()
    {
        $modulos = $this->pdo->prepare("DELETE FROM modulos
            WHERE  id = :id
        ");
        $modulos->bindValue(':id', $this->getId());
        try {
            return $modulos->execute();
        } catch (Exception $retorno) {
            return $retorno->getMessage();
        }
    }
    public function SelectAll()
    {
        $modulos = $this->pdo->prepare("SELECT * FROM modulos where status =:status");  
        $modulos->bindValue(':status', $this->getStatus());      
        try {
            $modulos->execute();
            return $modulos->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $retorno) {
            return $retorno->getMessage();
        }
    }
}
