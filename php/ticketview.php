<?php
session_start();
error_reporting(0);
$date = $_GET['date'];
$uid= $_SESSION["login"];
$event=$_GET['eventid'];
$see = $_GET['see'];

 $conn = mysqli_connect('localhost', 'root', '', 'events')  or die('Cannot 123 connect to db');



$query = "select ticket.classType, event.name,event.addres , event.imagLink,ticket.tiketCode,ticket.price,ticket.edate,ticket.timeStart from event inner join ticket on ticket.eventId = event.eventId
where ticket.cliantId = $uid and ticket.edate = '$date' and ticket.eventid =$event ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
 
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>

<?php
    if($see == 1){echo'<button style="margin-left:45%"><a href=showpage.php?id='.$event.'&see=2">&#8656;back</a></button>';}
    ?>
    
<button onclick="window.print()" > print</button><button ><a href="fpage.php">go back home</a></button>
<?php
$result =mysqli_query($conn, $query)or die ("Error in query" . mysqli_error($conn));

while($row = mysqli_fetch_assoc($result)){
    $cid =$row[classType];
    $cque = "SELECT className from class where classId = '$cid'";
    $cresult =mysqli_query($conn, $cque)or die ("Error in query" . mysqli_error($conn));
$crow = mysqli_fetch_assoc($cresult);
          echo" <div class='container'>";
    echo"<div class='row'>";
       
        echo" <div  style='border-style: solid; 'class='col-sm-12 col-md-12 col-lg-12' >";

              echo"<div class='container'>";
                  echo"<div class='row'>";
                  echo"<div class='col-sm-4 col-md-4 col-lg-4' ><img  class='img-thumbnail' style='height:300px;width: 220px;'src='$row[imagLink]' alt='Event Poster'> </div>";
                  echo"<div class='col-sm-4 col-md-4 col-lg-4'style='float: left'>";
                  echo"<H2>$row[name] </H2><p></p>";
                  echo"<hr style='border-top: dotted 3px;' />";
                  echo"<h4 >type:$crow[className] </h4><h4>Addres: $row[addres]</h4><h4>date and time:  <br>$row[edate]. $row[timeStart]</h4><h2>Price:€ $row[price]</h2><p>$row[tiketCode]</p>";

                                          echo"</div>";

                                    echo"<img class='col-sm-4 col-md-4 col-lg-4' src='https://api.qrserver.com/v1/create-qr-code/?data=($row[tiketCode])&size=200x200' style= 'padding-left: 90px'> ";
                                    echo"  </div> ";

               echo"</div>";
               echo"</div>";            
               echo"</div>";
               echo"</div>";
    echo"<br>";

}




?>
</body>
</html>