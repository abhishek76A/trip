
<?php
//error_reporting(0);
 $con = mysqli_connect('localhost','root');
 
//  if($con){  
    //   echo "connection sucessfull"; 
//  
//   }else{
    //   echo "no connection";
//  }
mysqli_select_db($con,'youtubeuserdata');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query = "insert into userinfodata(user, email, mobile, comment) 
values ('$user','$email','$mobile','$comment')";

//  echo "$query";
mysqli_query($con,$query);
// header('location:index.php');

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img  class="bg"src="dspmuimg.jpg" alt="dspmu ranchi" srcset="">
    <div class="container"> 
    <h1>welcome to dspmu ranchi trip form</h1>
    <p>enter your details and submit this form to confirm participation in thr trip</p>
    <p class="submitmsg">thanks for submitting your form.we are happy to see you joining us for 
    the puri trip</p>
    
    <form action="index.php" method="post">
    <input type="text" name="user" id="user" placeholder="Enter your name">
    <input type="email" name="email" id="email" placeholder="enter your email adress">
    <input type="text" name="mobile" id="mobile"placeholder="enter your mobile no">
    <input type="text" name="comment" id="comment"placeholder="tell us where you want to go for trip">
    <!-- <input type="phone" name="phone" id="phone"placeholder="enter your phone"> -->
    <!-- <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other information here"></textarea> -->
    <button class="btn">submit</button>
</div>
</form>
</body>
</html>