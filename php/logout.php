<?php
 session_start();
$page = $_GET["page"];
$datei = $_GET["datea"];
$id = $_GET["id"];
$ca = $_GET["cata"];
if($ca ==1){
    session_destroy();
    header('Location:http://localhost/'.$page);
}
elseif($ca == 2){
     session_destroy();

header('Location:http://localhost/'.$page.'?id='.$id);
}else{
 session_destroy();
echo "Localhost/".$page;
echo $datei;
    echo $id;
header('Location:http://localhost/'.$page.'?date='.$datei.'&id='.$id);
}


?>