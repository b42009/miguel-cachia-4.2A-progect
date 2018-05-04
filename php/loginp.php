<?php
error_reporting(0);
session_start();
$usename = $_POST["username"];
$password = $_POST["pwd"];
$page = $_POST["page"];
$id = $_POST["idi"];
$ca = $_POST["cata"];
$datei = $_POST["date"];
echo $usename." ". $password;
 $conn = mysqli_connect('localhost', 'root', '', 'events') or die('Cannot connect to db');
$qiery="select clientId  FROM client where userName = '$usename' and passWord = '$password'";
$result =mysqli_query($conn, $qiery);
$num = mysqli_num_rows($result);
echo $num;
 if($num == 0){
     echo"not";
     $_SESSION["logwor"] = "LogIn failed rety.";
    
 }
else{
    $row = mysqli_fetch_assoc($result);
  
    if($ca == 1){
        $_SESSION["login"] = $row[clientId];
       header('Location:http://localhost/'.$page);
    
    }
    elseif($ca == 2){
        $_SESSION["login"] = $row[clientId];
         header('Location:http://localhost/'.$page.'?id='.$id);
}
    elseif($ca ==3){
         $_SESSION["login"] = $row[clientId];

        header('Location:http://localhost/'.$page.'?date='.$datei.'&id='.$id);}
    
    
        
    }



?>
