<?php
session_start();
error_reporting(0);
$id = $_POST['id'];
$num = $_POST['not'];
$class = $_POST['class'];
$date = $_POST['date'];
$cnumber = $_POST['number'];
$namec = $_POST['noc'];
$yearc = $_POST['yot'];
$monthc = $_POST['mot'];
$total = $_POST['total'];

if(!isset($cnumber)){ $_SESSION["buywor"] = "Transaction faild.";
 header('Location:buyform.php?id ='.$id.'date ='.$date.'class='.$class);}
$query="SELECT value from bank WHERE cod = '$cnumber' and month = '$monthc' and year = '$yearc' ";
 $conn = mysqli_connect('localhost', 'root', '', 'bank')  or die('Cannot 123 connect to db');
 $tconn = mysqli_connect('localhost', 'root', '', 'events')  or die('Cannot 123 connect to db');

$result =mysqli_query($conn, $query)or die ("Error in query5" . mysqli_error($conn));

$nnum = mysqli_num_rows($result);
echo $nnum;
 if($nnum == 0){
     echo"not";
     $_SESSION["buywor"] = "Transaction faild.";
 header('Location:buyform.php?id='.$id.'&date='.$date.'&class='.$class.'&not='.$num);}
else{
    unset( $_SESSION["buywor"]);
    $row = mysqli_fetch_assoc($result);
    if($row[value]>$total){
        echo "good";
        $Squery = "update bank set value = value - $total where cod = '$cnumber' and month = '$monthc' and year = '$yearc' ";
        $sresult =mysqli_query($conn, $Squery)or die ("Error in query1" . mysqli_error($conn));
        if($sresult){
            $rquery = "update bank set value = (value + $total) where cod = 000 and month = '12' and year = '2028' ";
            $rresult =mysqli_query($conn, $rquery)or die ("Error in query2" . mysqli_error($conn));
            
            $qu ="select tiketId from ticket where eventId = $id and edate ='$date' and classType = $class and cliantId IS NULL";
                    $tn = 0;
            $idui = $_SESSION['login'];
                $qur =mysqli_query($tconn, $qu)or die ("Error in query12" . mysqli_error($conn));
            
             while($crow = mysqli_fetch_assoc($qur)){
                
                 if($tn != $num){
                     $up ="update ticket set cliantId = $idui   where tiketId ='$crow[tiketId]'";
                      $ui=mysqli_query($tconn, $up)or die ("Error in query3" . mysqli_error($conn));
                     $tn++;
                 }else{break;}
             }
            
           
            
            
            if($ui){ header('Location:http://localhost/ticketview.php?date='.$date.'&eventid='.$id);}
    
    
    }

}
}
?>