<?php
require_once 'ConexaoMysql.php';
class videos extends ConexaoMysql
{
    public $id;
    public $id_modulo;
    public $nome;
    public $texto;
    public $time;
    public $capa;
    public $banner;
    public $destaque;
    public $data_liberacao;
    public $bloqueado;
    public $capa_bloqueado;
    public $video_indice_aula;
    public function getId()
    {
        return $this->id;
    }
    public function getId_modulo()
    {
        return $this->id_modulo;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getTexto()
    {
        return $this->texto;
    }
    public function getTime()
    {
        return $this->time;
    }
    public function getCapa()
    {
        return $this->capa;
    }
    public function getBanner()
    {
        return $this->banner;
    }
    public function getDestaque()
    {
        return $this->destaque;
    }
    public function getData_liberacao()
    {
        return $this->data_liberacao;
    }
    public function getBloqueado()
    {
        return $this->bloqueado;
    }
    public function getCapa_bloqueado()
    {
        return $this->capa_bloqueado;
    }
    public function getVideo_indice_aula(){
        return $this->video_indice_aula;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setId_modulo($id_modulo)
    {
        $this->id_modulo = $id_modulo;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setTexto($texto)
    {
        $this->texto = $texto;
    }
    public function setTime($time)
    {
        $this->time = $time;
    }
    public function setCapa($capa)
    {
        $this->capa = $capa;
    }
    public function setBanner($banner)
    {
        $this->banner = $banner;
    }
    public function setDestaque($destaque)
    {
        $this->destaque = $destaque;
    }
    public function setData_liberacao($data_liberacao)
    {
        $this->data_liberacao = $data_liberacao;
    }
    public function setBloqueado($bloqueado)
    {
        $this->bloqueado = $bloqueado;
    }
    public function setCapa_bloqueado($capa_bloqueado)
    {
        $this->capa_bloqueado = $capa_bloqueado;
    }
    public function setVideo_indice_aula($video_indice_aula){
        $this->video_indice_aula = $video_indice_aula;
    }
    public function Insert()
    {
        $videos = $this->pdo->prepare("INSERT INTO videos (
            id_modulo,
            nome,
            texto,
            time,
            capa,
            banner,
            destaque,
            data_liberacao,
            bloqueado,
            capa_bloqueado,
            video_indice_aula
        ) VALUES (
            :id_modulo,
            :nome,
            :texto,
            :time,
            :capa,
            :banner,
            :destaque,
            :data_liberacao,
            :bloqueado,
            :capa_bloqueado,
            :video_indice_aula
        )");
        $videos->bindValue(':id_modulo', $this->getId_modulo());
        $videos->bindValue(':nome', $this->getNome());
        $videos->bindValue(':texto', $this->getTexto());
        $videos->bindValue(':time', $this->getTime());
        $videos->bindValue(':capa', $this->getCapa());
        $videos->bindValue(':banner', $this->getBanner());
        $videos->bindValue(':destaque', $this->getDestaque());
        $videos->bindValue(':data_liberacao', $this->getData_liberacao());
        $videos->bindValue(':bloqueado', $this->getBloqueado());
        $videos->bindValue(':capa_bloqueado', $this->getCapa_bloqueado());
        $videos->bindValue(':video_indice_aula', $this->getVideo_indice_aula());
        try {
            return $videos->execute();
        } catch (Exception $retorno) {
            return $retorno->getMessage();
        }
    }
    public function Update()
    {
        $videos = $this->pdo->prepare("UPDATE videos SET            
            id_modulo = :id_modulo,
            nome = :nome,
            texto = :texto,
            time = :time,
            capa = :capa,
            banner = :banner,
            destaque = :destaque,
            data_liberacao = :data_liberacao,
            bloqueado = :bloqueado,
            capa_bloqueado = :capa_bloqueado
            WHERE id = :id
        ");
        $videos->bindValue(':id', $this->getId());
        $videos->bindValue(':id_modulo', $this->getId_modulo());
        $videos->bindValue(':nome', $this->getNome());
        $videos->bindValue(':texto', $this->getTexto());
        $videos->bindValue(':time', $this->getTime());
        $videos->bindValue(':capa', $this->getCapa());
        $videos->bindValue(':banner', $this->getBanner());
        $videos->bindValue(':destaque', $this->getDestaque());
        $videos->bindValue(':data_liberacao', $this->getData_liberacao());
        $videos->bindValue(':bloqueado', $this->getBloqueado());
        $videos->bindValue(':capa_bloqueado', $this->getCapa_bloqueado());
        try {
            return $videos->execute();
        } catch (Exception $retorno) {
            return $retorno->getMessage();
        }
    }
    public function Delete()
    {
        $videos = $this->pdo->prepare("DELETE FROM videos
        ");
        try {
            return $videos->execute();
        } catch (Exception $retorno) {
            return $retorno->getMessage();
        }
    }
    public function Select()
    {
        $videos = $this->pdo->prepare("SELECT 
    modulos.id AS modulo_id,
    modulos.nome AS modulo_nome,
    modulos.status AS modulo_status,
    modulos.apresentacao AS modulo_apresentacao,
    videos.id AS video_id,
    videos.nome AS video_nome,
    videos.texto AS video_texto,
    videos.time AS video_duracao,
    videos.capa AS video_capa,
    videos.banner AS video_banner,
    videos.destaque AS video_destaque,
    videos.data_liberacao AS video_data_liberacao,
    videos.bloqueado AS video_bloqueado,
    videos.capa_bloqueado AS video_capa_bloqueado,
    videos.indice_aula AS video_indice_aula
    FROM 
        modulos
    JOIN 
        videos ON modulos.id = videos.id_modulo
    WHERE 
        modulos.id = :id_modulo
     ORDER BY 
     modulos.id, videos.indice_aula

    ");
        $videos->bindValue(':id_modulo', $this->getId_modulo());
        try {
            $videos->execute();
            return $videos->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $retorno) {
            return $retorno->getMessage();
        }
    }
    public function SelectDestaque()
    {
        // Preparação da consulta SQL com placeholders para parâmetros
        $videos = $this->pdo->prepare("
            SELECT 
                modulos.id AS modulo_id,
                modulos.nome AS modulo_nome,
                modulos.status AS modulo_status,
                modulos.apresentacao AS modulo_apresentacao,
                videos.id AS video_id,
                videos.nome AS video_nome,
                videos.texto AS video_texto,
                videos.time AS video_duracao,
                videos.capa AS video_capa,
                videos.banner AS video_banner,
                videos.destaque AS video_destaque,
                videos.data_liberacao AS video_data_liberacao,
                videos.bloqueado AS video_bloqueado,
                videos.capa_bloqueado AS video_capa_bloqueado,
                videos.indice_aula AS video_indice_aula
            FROM 
                modulos
            JOIN 
                videos ON modulos.id = videos.id_modulo
            WHERE 
                videos.destaque = :destaque
                AND videos.bloqueado = :bloqueado
            ORDER BY 
                modulos.id, videos.indice_aula
        ");
    
        // Ligação dos valores dos parâmetros usando métodos específicos
        $videos->bindValue(':destaque', $this->getDestaque());
        $videos->bindValue(':bloqueado', $this->getBloqueado());
    
        try {
            // Execução da consulta
            $videos->execute();
            // Retorno dos resultados em um array associativo
            return $videos->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Captura e retorno da mensagem de erro em caso de falha
            return "Erro ao buscar vídeos: " . $e->getMessage();
        }
    }
    public function SelectDestaqueMod()
    {
        // Preparação da consulta SQL com placeholders para parâmetros
        $videos = $this->pdo->prepare("
            SELECT 
                modulos.id AS modulo_id,
                modulos.nome AS modulo_nome,
                modulos.status AS modulo_status,
                modulos.apresentacao AS modulo_apresentacao,
                videos.id AS video_id,
                videos.nome AS video_nome,
                videos.texto AS video_texto,
                videos.time AS video_duracao,
                videos.capa AS video_capa,
                videos.banner AS video_banner,
                videos.destaque AS video_destaque,
                videos.data_liberacao AS video_data_liberacao,
                videos.bloqueado AS video_bloqueado,
                videos.capa_bloqueado AS video_capa_bloqueado,
                videos.indice_aula AS video_indice_aula
            FROM 
                modulos
            JOIN 
                videos ON modulos.id = videos.id_modulo
            WHERE 
                videos.destaque = :destaque
                AND videos.bloqueado = :bloqueado
                AND modulos.id = :id_modulo
            ORDER BY 
                modulos.id, videos.indice_aula
        ");
    
        // Ligação dos valores dos parâmetros usando métodos específicos
        $videos->bindValue(':destaque', $this->getDestaque());
        $videos->bindValue(':bloqueado', $this->getBloqueado());
        $videos->bindValue(':id_modulo', $this->getId_modulo());
    
        try {
            // Execução da consulta
            $videos->execute();
            // Retorno dos resultados em um array associativo
            return $videos->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Captura e retorno da mensagem de erro em caso de falha
            return "Erro ao buscar vídeos: " . $e->getMessage();
        }
    }
    
}
