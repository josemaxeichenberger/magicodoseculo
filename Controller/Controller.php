<?php

function my_autoload($pClassName) {
    include('../Class' . "/" . $pClassName . ".class.php");
}

spl_autoload_register("my_autoload"); // Carrega as classes 

if(isset($_POST['action']) == 'likeSend'){
$videos_like = new videos_like();
$videos_like->setId_usuario($_POST['id_usuario']);
$videos_like->setId_video($_POST['id_video']);
$videos_like->setTipo($_POST['tipo']);
$res = $videos_like->Insert();
if($res){
    http_response_code(200);
    echo  json_encode(['status'=>200 , 'data' => $res]);
}
}

if(isset($_GET['action']) == 'getLikes'){
    $videos_like = new videos_like();    
    $videos_like->setId_video($_GET['id_video']);
    $videos_like->setTipo($_GET['tipo']);
    $res = $videos_like->SelectCount();
    
    echo  json_encode(['status'=>200 , 'data' => $res]);
    }