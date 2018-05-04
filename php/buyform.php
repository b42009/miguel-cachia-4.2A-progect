<?php
 $date = $_POST['date'];
 $id = $_POST['idi'];
 if (!isset($_SESSION["login"])){
     
$_SESSION["buywor"] = "You have to login to buy.";
        header('Location:http://localhost/selectticket.php?date='.$date.'&id='.$id);
 }else{}

?>