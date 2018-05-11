<?php
$forh=$_POST['forh'];
$eid=$_POST['eid'];
$class=$_POST['class'];
$time=$_POST['time'];
$Price=$_POST['Price'];
$cod=$_POST['Cod'];
$date=$_POST['date'];
$edate=$_POST['edate'];
$dur=$_POST['dur'];
$name =$_POST['name'];
echo $name ." ".$class;
$title =explode("-",$name);
$n = sizeof($title);
$name = null;
$name = $title[0];
echo "<p> bf</p>";
for($i = 1;$i< $n;$i++){
    $name = $name ." ". $title[$i];
}
echo $name;

    echo $eid;
    $forh = $forh-1;

$conn = mysqli_connect('localhost', 'root', '', 'events') or die('Cannot connect to db');
  $query="INSERT INTO ticket (tiketCode,price,classType,eventId,timeStart,edate) 
VALUES ('$cod','$Price','$class','$eid',' $time','$date')";
            if(mysqli_query($conn,$query)){echo"good";}
echo $query;
$name= trim($name);
echo "hello".$name;
$title =explode(" ",$name);
$n = sizeof($title);
$name = null;
$name = $title[0];
echo "<p> bf</p>";
for($i = 1;$i< $n;$i++){
    $name = $name ."-". $title[$i];
}
echo $name."loba";
header('Location:http://localhost/uplodevent.php?&ticketn='.$forh.'&date='.$edate.'&dur='.$dur.'&name='.$name);




?>