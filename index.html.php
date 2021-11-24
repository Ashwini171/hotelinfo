<!DOCTYPE HTML>
<html>

<head>
  <title>Register Form</title>
</head>
<link rel="stylesheet" href="st.css">

<link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre&family=Baloo+Bhai+2:wght@600&family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre&family=Baloo+Bhai+2:wght@600&family=Lobster&family=Puppies+Play&display=swap" rel="stylesheet">
<style>
html { 
  font-family: 'Lobster', cursive;
            color: black;
            
			background: url(img/hbg3.jpg) no-repeat center center fixed;
         
            
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
    .header{
          margin: top 0px;
          padding: 5px;
           background-color: orange;
           opacity: 0.8;
        
       }

    .left{
           display: inline-block;
        /* border: 2px solid red; */
           position: absolute;
           left: 60px;
           top: 13px;

        }
        .left img{
            margin:top 5px;
            width: 70px;
         
            
        }
       
      
        .mid{
            display: block;
            width: 60%;
            margin: 20px auto;
            color:black;
        /* border: 2px solid green; */

        }
        .right{
          display: inline-block;
        /* border: 2px solid red; */
           position: absolute;
           right: 60px;
           top: 10px;

        }
        .navbar li{
            
            display: inline-block;
            font-size: 25px;
        }
        .navbar li a{
            color: white;
            text-decoration: none;
            padding: 31px 18px;
        }
        .navbar li  a:hover ,
        a.active{
            color: gray;
            
            

        }
        .right{
            font-size:10px
            background-color: coral;
            
         
            
        }
    
  input[type=submit] {

background-color: coral;
color: white;
padding: 10px 20px;
border: none;
border-radius: 4px;
cursor: pointer;

}
input[type=submit]:hover {

background-color:peachpuff;

}
.container{
  
       color: white;
       margin:100px 60px;
      
       padding: 90px;
       width: 20%;
      background-color: black;
      opacity: 0.7;
       
       }
       
       #myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}


</style>
  
  
<body>

<video autoplay muted loop id="myVideo">
  <source src="img/vd2.mp4" type="video/mp4">
  
</video>
<header class="header">
        <!--left for logo-->
        <div class="left">
            <img src="img/logo.png" alt="">
            <div font-family: 'Puppies Play', cursive; ><i><small>Feel welcome</small></i></div>
            


        </div>

        <!-- mid for navbar-->
        <div class="mid">
            <ul class="navbar">
                <li><a href="#" class="active">Hotel</a></li>

                <li><a href="html/ak.html">Resturant</a></li>

                <li><a href="#">Bar</a></li>

                <li><a href="#">Specail offers</a></li>

                <li><a href="#">Gallery</a></li>
        
                <li><a href="#">About </a></li>
            </ul>
        </div>

        <!-- right for buttons-->
        <div class="right">
          <ul class="navbar">
        <li><a href="#">Contact Us</a></li>
        <div>IN +079-26427715</div>
        </ul>
            
        </div>

    </header>


<div  class="container">

  <form action="akphp.php" method="POST">
    <table>
      <h2><b>Reseve your stay<b></h2>
      <tr>
        <td>Fullname :</td>
        <td><input type="text" name="fullname" required></td>
      </tr>
      <tr>
        <td>Email :</td>
        <td><input type="email" name="email" required></td>
      </tr>
      <tr>
        <td>DOB :</td>
        <td><input type="date" name="date" required></td>
      </tr>
      <tr>
        <td>Password :</td>
        <td><input type="password" name="pass" required></td>
      </tr>
      <tr>
        <td>Gender :</td>
       <td>
          <input type="radio" name="gender" value="m" required>Male
          <input type="radio" name="gender" value="f" required>Female
        </td>
      </tr>
      
      <tr>
        <td><input type="submit" value="Submit" name="submit"></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>