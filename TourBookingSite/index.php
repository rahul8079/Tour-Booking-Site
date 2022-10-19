<?php 
$servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $database = "Mydatabase";
   
     // Create a connection 
     $conn = mysqli_connect($servername, 
         $username, $password, $database);
   
    // Code written below is a step taken
    // to check that our Database is 
    // connected properly or not. If our 
    // Database is properly connected we
    // can remove this part from the code 
    // or we can simply make it a comment 
    // for future reference.
   
    if($conn) {
        //echo "success"; 
    } 
    else {
        die("Error". mysqli_connect_error()); 
    }
?> 

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/formstyle1.css"/>

</head>
<body>
<div class="l1"> 
<div style="height:10px; width:10px; border:1px solid white;postion:relative;display:inline-block;margin-left:20px;"></div>
<div style="height:10px; width:10px; border:1px solid white; postion:absolute;display:inline-block;"></div><br>
<div style="height:10px; width:10px; border:1px solid white;position:relative;display:inline-block;margin-left:20px;"></div>
<div style="height:10px; width:10px; border:1px solid white;position:absolute;display:inline-block;margin-left:4px;"></div>
<p class="para2">Booking.com</p>    
<p class="para3">Welcome Back!</p>
<p style="text-align:center;font-family:verdana;color:white;">To keep connected with us please </p>
<p style="text-align:center;font-family:verdana;color:white;">login with your personal info</p>
</div>


<div class="l2">
<p class="para1">Booking.com</p>
<form action="MainPage.php" method="POST">
<img  class="i1"src="icons\person.png"/>
<input type="text" placeholder="Username" name="username" required><br>
<img class="i2"src="icons\lock.png"/>
<input type="password" placeholder="Password" name="password" required><br><!--
<input type="tel" placeholder="Mobile" maxlength="10"required><br><br>-->
<a href="#">Forgot your password?</a><br>
<input type="submit" value="SIGN IN" name="signin"/><br>
<a href="SignUpPage.php">create new account</a>
</form>
</div>
</body>

</html>

<? php
   if(isset($_POST['signin'])) {
       $username=$_POST('username');
       $password=$_POST('password');

     $sql="Select * from users where username='".$username"' AND password='".$password"' limit 1";
     $result= mysql_query($sql);

     if(mysql_num_rows($result)==1){
      echo "you have successfully logged in";
      exit();
}
   else{
      echo "you have entered incorrect password";
      exit();
}
}

?>
