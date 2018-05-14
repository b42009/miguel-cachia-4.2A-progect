<?php 
echo'aw lokiii';
$date=$_POST['date'];
$id=$_POST['idd'];
$name=$_POST['name'];
$adres=$_POST['adres'];
$duration=$_POST['duration'] ;
$type=$_POST['tevent'];
$conn = mysqli_connect('localhost', 'root', '', 'events') or die('Cannot connect to db');
$query="UPDATE event
SET name ='$name' ,eventDate = '$date',addres = '$adres',durationInDays='$duration'
WHERE eventId = $id;";
  if(mysqli_query($conn, $query)){ header('Location:http://localhost/changchoos.php');}
   



?>