<?php
$conn = mysqli_connect('localhost', 'root', '', 'events') or die('Cannot connect to db');
$ticketn=$_GET['ticketn'];
$date=$_GET['date'];
$duration=$_GET['dur'];
$name = $_GET['name'];
if(!isset($ticketn)){ 
$name=$_POST['name'];   
                $date=$_POST['date'];
                $adres=$_POST['adres'] ;
                $duration=$_POST['duration']; 
                $tevent=$_POST['tevent'];
                $imagesiz=$_POST['imagesiz'];
                $ticketn=$_POST['ticketn'];

if(isset($name)){

if(isset($_POST['submit']))
        $targetdir = 'uploads/';
        $targetfile = $targetdir.basename($_FILES['fileUpload']['name']);
        echo $targetfile;
        if(move_uploaded_file($_FILES['fileUpload']['tmp_name'],$targetfile)){
            echo"the file".basename($_FILES['fileUpload']['name'])."has deen uploaded";
                
            $edate=date("Y/m/d");
            echo $edate;
            $query="INSERT INTO event (name,edate,imagLink,eventDate,addres,type,imgcategory,durationInDays) 
VALUES ('$name','$edate','$targetfile','$date',' $adres',$tevent,$imagesiz,$duration)";
            if(mysqli_query($conn,$query)){echo"good";}
 echo "efwef";
        
        }}}if($ticketn == 0 ){header('Location:http://localhost/workers.php');
                             }else{ 


error_reporting(0);
    session_start();

$title =explode("-",$name);
$n = sizeof($title);
$name = null;
$name = $title[0];
echo "<p> bf</p>";
for($i = 1;$i< $n;$i++){
    $name = $name ." ". $title[$i];
}
    echo $name . $date;
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="stylef.css">
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light  navbar navbar-dark bg-dark">
   <a class="navbar-brand" style="color :#00FFFF;" href="http://localhost/workers.php">Let's book!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
  
      

      
      
         <?php
            if (isset($_SESSION["login"])){
                 if( $_SESSION["user"] == 'worker'){header('Location:http://localhost/workers.php');}
                $id=$_SESSION['login'];
                 $logquery = "select clientName from client WHERE clientId =$id ";
    $logresult =mysqli_query($conn, $logquery)or die ("Error in query" . mysqli_error($conn));
                $logrow = mysqli_fetch_assoc($logresult);
                
                 echo'<li class="nav-item dropdown" style="float: right;">';
                echo'<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                echo'hello '. $logrow[clientName];
                echo'</a>';
            echo'<div id="drop" class="dropdown-menu" aria-labelledby="navbarDropdown">';
              echo"<h4><a href='http://localhost/logout.php?page=logout.php?&page=fpage.php&cata=1'>LogOut</a></h4>";
               echo' </div>';
                echo'</li>';
            }
           else{ 
              
                echo'<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal" style="background-color#424242 ; ">';
                  echo'Login/Sghn up';
                echo'</button>';
                echo'<li class="nav-item dropdown" style="float: right;">';
               echo'<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"'; echo'aria-labelledby="exampleModalLabel" aria-hidden="true">';
 echo' <div class="modal-dialog" role="document ">';
    echo'<div class="modal-content">';
      echo'<div class="modal-header">';
        echo'<h5 class="modal-title" id="exampleModalLabel">LogIn</h5>';
       echo' <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
          echo'<span aria-hidden="true">&times;</span>';
       echo' </button>';
      echo'</div>';
      echo'<div class="modal-body">';
        echo'<form class="form-inline" method="post" action="loginp.php">';
                    echo'<div class="form-group">';
                     echo'<label for="email">Username</label><br>';
                     echo' <input type="text" class="form-control" id="username" placeholder="Enter Usename" name="username">';
                    echo'</div>';
                   echo' <div class="form-group">';
                     echo' <label for="pwd">Password:</label>';
                     echo' <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">';
                   echo' </div>';
                
                 if (isset($_SESSION["logwor"])){
                     $mess = $_SESSION["logwor"];
                     echo'<mark>'.$mess.'</mark>';
                 }echo' </div>';
                   echo' <input type="submit" class="btn btn-default" value="Log In">';
                   echo' <br>';
                   echo' <a href="">Forgot password</a><p>';
                echo'<a href="accauntform.php">Sing Up</a>';
                  echo  "<input type='text' style='visibility: hidden' value='$date' name='date'>";
                echo  "<input type='text' style='visibility: hidden' value='fpage.php' name='page'>";
                echo  "<input type='text' style='visibility: hidden' value='1' name='cata'>";
                 echo  "<input type='text' style='visibility: hidden' value='$id' name='idi'>";
             echo'</form>';
      echo"</div>";
      
    echo"</div>";
  echo"</div>";
echo"</div>";
               
            }
            ?>
   
               
          
        
    </ul>
    
    
  </div>
</nav>
<div class='jumbotron' style='background-color:#808080; width:80%;    margin-left: 10%; margin-top: 2%;'>
      <h1>Add Ticket</h1>
       <hr align="left"width="100%">
       <body class="container-fluid">

        <div class="row">
        
       
          <form  method='post' action='ticketadd.php' class='container-fluid'>
                          <div class='row'>
                          <h5   class='col-sm-12 col-md-12 col-lg-12'>Ticked Code</h5>
                            <input type='text' name='Cod'  class='col-sm-12 col-md-12 col-lg-12'required>
       
                            <h5   class='col-sm-12 col-md-12 col-lg-12'>Price</h5>
                            <input type='number' name='Price'  class='col-sm-12 col-md-12 col-lg-12'required>
      
                            <h5   class='col-sm-12 col-md-12 col-lg-12'>Time start</h5>
                            <input type='time' name='time'  class='col-sm-12 col-md-12 col-lg-12'required>
                           
                             <h5   class='col-sm-12 col-md-12 col-lg-12'>Date</h5required>
                             <select name="date">
            <?php  $q="select * from event where name = '$name' and eventDate ='$date'" ;
            $qur =mysqli_query($conn, $q)or die ("Error in23 query" . mysqli_error($conn));
                $wow = mysqli_fetch_assoc($qur);
                    $du= $wow[eventDate];
    
    
        @$da = new DateTime($wow[eventDate]);
                            $da->modify('-1 day');
                        for($z = 1;$z<=$duration;$z++){
                              $datrow = mysqli_fetch_assoc($datresult);
                            $da->modify('+1 day');
                               $dai =  date_format($da, 'Y-m-d');
                                  echo' <option value="'.$dai.'">'.$dai.'</option> ';}?>
                                    </select>
                             
                              <h5   class='col-sm-12 col-md-12 col-lg-12'>class type</h5>
                               <select name="class">
                                <?php
                             
      $typeq="select DISTINCT className,classId from class ";
       $typer =mysqli_query($conn, $typeq)or die ("Error in query" . mysqli_error($conn));
      while($row = mysqli_fetch_assoc($typer)) {
    echo' <option value="'.$row[classId].'">'.$row['className'].'</option> ';
        } 
                              
                              
                              ?></select>
                        <?php echo $name;   $name= preg_replace('/[[:space:]]+/', '-', $wow[name]);
                    echo $name;
                              
    
    
                               ?>
           
            <input type='text' style='visibility: hidden' value='<?php echo $wow[eventId];?>' name='eid'>
            <input type='text' style='visibility: hidden' value='<?php echo  $ticketn;?>' name='forh'>
            <input type='text' style='visibility: hidden' value='<?php echo $name ;?>' name='name'> 
            <input type='text' style='visibility: hidden' value='<?php echo $wow[eventDate];?>' name='edate'>                 
         <input type='text' style='visibility: hidden' value='<?php echo $duration;?>' name='dur'>                          <input type="submit" name="submit">
                                     </div>
                                 </form>
                                           <br/>
                                          
                                        
           


        </div>
    </body>
          
          <div class='container'>
    </div>
    </div>


 
</body>
</html>
        
       <?php } ?>
      
     
    
   
  
