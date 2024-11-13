<?php
require_once 'ConexaoMysql.php';
class videos_like extends ConexaoMysql
{
    public $id;
    public $id_usuario;
    public $tipo;
    public $id_video;
    public function getId()
    {
        return $this->id;
    }
    public function getId_usuario()
    {
        return $this->id_usuario;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function getId_video()
    {
        return $this->id_video;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function setId_video($id_video)
    {
        $this->id_video = $id_video;
    }
    public function Insert()
    {
        $videos_like = $this->pdo->prepare("INSERT INTO videos_like (            
            id_usuario,
            tipo,
            id_video
        ) VALUES (            
            :id_usuario,
            :tipo,
            :id_video
        )");
        $videos_like->bindValue(':id_usuario', $this->getId_usuario());
        $videos_like->bindValue(':tipo', $this->getTipo());
        $videos_like->bindValue(':id_video', $this->getId_video());
        try {
            return $videos_like->execute();
        } catch (Exception $retorno) {
            return $retorno->getMessage();
        }
    }
    public function Update()
    {
        $videos_like = $this->pdo->prepare("UPDATE videos_like SET
            id_usuario = :id_usuario,
            tipo = :tipo,
            id_video = :id_video
        WHERE  id = :id
        ");
        $videos_like->bindValue(':id', $this->getId());
        $videos_like->bindValue(':id_usuario', $this->getId_usuario());
        $videos_like->bindValue(':tipo', $this->getTipo());
        $videos_like->bindValue(':id_video', $this->getId_video());
        try {
            return $videos_like->execute();
        } catch (Exception $retorno) {
            return $retorno->getMessage();
        }
    }
    public function Delete()
    {
        $videos_like = $this->pdo->prepare("DELETE FROM videos_like
            WHERE  id = :id
        ");
        $videos_like->bindValue(':id', $this->getId());
        try {
            return $videos_like->execute();
        } catch (Exception $retorno) {
            return $retorno->getMessage();
        }
    }
    public function Select()
    {
        $videos_like = $this->pdo->prepare("SELECT * FROM videos_like
            WHERE  id = :id
        ");
        $videos_like->bindValue(':id', $this->getId());
        try {
            $videos_like->execute();
            return $videos_like->fetchAll();
        } catch (Exception $retorno) {
            return $retorno->getMessage();
        }
    }
    public function SelectCount()
    {
        $videos_like = $this->pdo->prepare("SELECT COUNT(*) as total FROM videos_like
            WHERE  tipo = :tipo and id_video=:id_video
        ");
        $videos_like->bindValue(':tipo', $this->getTipo());
        $videos_like->bindValue(':id_video', $this->getId_video());
        try {
            $videos_like->execute();
            return $videos_like->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $retorno) {
            return $retorno->getMessage();
        }
    }
}
