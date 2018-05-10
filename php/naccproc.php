<?php
 session_start();
error_reporting(0);
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$pass =$_POST['password'];
$username=$_POST['username'];

    $conn = mysqli_connect('localhost', 'root', '', 'events') or die('Cannot connect to db');
$query="INSERT INTO client (clientName , clientSurname,dateOfBirth,email,userName,passWord) VALUES ('$fname','$lname','$dob','$email','$username','$pass')";
$checkq="select clientId from client where userName='$username' and passWord = '$pass' ";
$ckresult =mysqli_query($conn, $checkq);
$chn = mysqli_num_rows($ckresult);
echo $chn;
if($chn ==0){
    $result =mysqli_query($conn,$query);
    $log="select clientId  FROM client where userName = '$username' and passWord = '$pass'";
    $lresult =mysqli_query($conn,$log);
    echo mysqli_num_rows($lresult);
   
    $lrow = mysqli_fetch_assoc(lresult);
        $i =$lrow[clientId];
   
    $_SESSION["login"] = $lrow[clientId];
        unset($_SESSION["nac"]);
      header('Location:http://localhost/fpage.php');
    
}
else{$_SESSION["nac"] = "aready exist plis try Agan";
    header('Location:http://localhost/accauntform.php');}








?>