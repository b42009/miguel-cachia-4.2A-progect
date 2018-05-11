<?php
$conn = mysqli_connect('localhost', 'root', '', 'events') or die('Cannot connect to db');
$id=$_GET['id'];
$query2="DELETE FROM event
WHERE eventId =$id;";

mysqli_query($conn, $query2)or die ("Error in query" . mysqli_error($conn));
header('Location:http://localhost/delitw.php');

?>