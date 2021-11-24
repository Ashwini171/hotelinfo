<?php
include "db_conn.php";
if (isset($_POST['submit'])) 
{

    if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['date']) && isset($_POST['gender'])) {
       
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $DOB= $_POST['date'];
        $gender = $_POST['gender'];
        
           if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Insert = "INSERT INTO registers  (fullname, email,pass, date , gender) values('$fullname','$email','$password','$DOB','$gender')";
            mysqli_query($conn,$Insert);
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>

<link href="https://fonts.googleapis.com/css2?family=Montagu+Slab:wght@100;200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<style>
   html { 
    font-family: 'Montagu Slab', serif;
            color: white;
            
			background: url(img/) no-repeat center center fixed;
       
         
            
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
        .centered {
            opacity: 0.8;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size:60px
  
}

.mid{
            display: block;
            width: 45%;
            margin: 10px auto;
            color:black;
        
        }

.navbar li{
            
            display: inline-block;
            font-size: 25px;
        }
        .navbar li a{
           
            color: white;
            text-decoration: none;
            padding: 31px 18px;
            opacity: 0.9;
        }
        .navbar li  a:hover ,
        a.active{
            color: gray;
            
            

        }
 


        
  

</style>
<body>



<header class="header">
       
            
        <!-- mid for navbar-->
        <div class="mid">
            <ul class="navbar">
                <li><a href="#" >Rooms</a></li>

                <li><a href="#">Events</a></li>

                <li><a href="#">Check In</a></li>

                <li><a href="#">Check Out</a></li>
        
                
            </ul>
        </div>

    

    </header>



<div class="centered">
         <center><i> Welcome </i> </center>
         <hr>
         The Standard High Line
      
   </div>
   
</body>
</html>