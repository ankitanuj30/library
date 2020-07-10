<html>
<head>
<title>....SPIDER...</title>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b50a6f3df040c3e9e0bc0e0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
</head>
<style>
body, html {
    height: 100%;
}
    <meta name="viewport" content="width=device-width, initial-scale=1">
        /* For mobile phones: */
[class*="col-"] {
    width: 100%;
}
body{
width=100%;3
height=100%;
font-family:"Helvetica Neue", Helvetica, sans-serif; 
color:#444;
background-image: url("library.jpeg");
 background-position: center;
 background-repeat: no-repeat;
    background-size: cover;
}
#container
{
 position:fixed;
 width:340px;
 height:340px;
 top:50%;
 left:30%;
margin-top:-140px;
margin-left: -170px;
background: white;
border: 1px solid #c7d0d2;
border-radius: 10px;
box-shadow: 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
}
    #container1
{
 position:fixed;
 width:340px;
 height:340px;
 top:50%;
 left:70%;
margin-top:-140px;
margin-left: -170px;
background: white;
border: 1px solid #c7d0d2;
border-radius: 10px;
box-shadow: 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
}
#l{
margin-left:250px;
margin-top:45px;
}
#l1{
margin-left:250px;
margin-top:5px;
}
input[type=text],
input[type=password] {
    color: #777;
 padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 18px;
    width: 290px;
    height: 35px;
}
input[type=submit] {
    float: right;
    margin-right: 20px;
    margin-top: -35px;
    width: 80px;
    height: 30px;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    background-color: black;
    border-radius: 30px;
    border: 1px solid blue;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
   cursor: pointer;
}
input[type=password] {
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 18px;
    width: 290px;
    height: 35px;
    border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
}

    #lower1 {
    width: 100%;
    height: 50px;
    margin-top: 25px;
}
input[type=checkbox] {
    margin-left: 20px;
    margin-top: 30px;
}
label {
    color: #555;
    display: inline-block;
    margin-left: 18px;
    padding-top: 45px;
    font-size: 18px;
}
    .bg{
        width:55px;
        height:55px;
        position:absolute;
        left:38.5%;
        top:1%;
    }
    .bg1{
        width:55px;
        height:55px;
        position:absolute;
        left:35.5%;
        top:1%;
    }
h1{
margin-top:05%;
margin-left:35%;
font-size:250%;
color:white;
    }
h2.as{
margin-top:09%;
margin-left:25%;
color:white;}
    h2.kl{
margin-top:-3.5%;
margin-left:65%;
color:white;}
    
</style>
<body>
<h1>Welcome to online library</h1>
<h2 class="as">admin</h2>
    <h2 class="kl">student</h2>
   
<div id="container">
     <img src="admin.jpeg" class="bg"></img>
    
<form method="POST" action="">
<label for="username">Username:</label>
<input type="text" id="username" name="username">
<label for="password">Password:</label>
<input type="password" id="password" name="password">
<div id="l">
<input type="submit" name="submit" value="Login">
</div>
</form>
</div>
<div id="container1">
     <img src="student234.jpeg" class="bg1"></img>
<form method="POST" action="">
<label for="username">Username:</label>
<input type="text" id="username" name="username">
<label for="password">Password:</label>
<input type="password" id="password" name="password">
<div id="lower1">
<a href="loginregistration.php">register now</a>
</div>
<div id="l1">
<input type="submit" name="submit1" value="Login">
</div>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
include'connection.php';
$sql = "SELECT *FROM login where username='".$_POST['username']."' and password='".$_POST['password']."' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
   session_start();
    $_SESSION['name']=$_POST['username'];
    echo"<script>alert('Login Successfully')</script>";
    echo"<script>window.location='page1.php'   </script>";
    mysqli_close($conn);
}
    else
    {
     echo"<script>alert('User id and password Wrong')</script>";   
    }
}
if(isset($_POST['submit1']))
{
include'connection.php';
$sql = "SELECT *FROM student_login where username='".$_POST['username']."' and password='".$_POST['password']."' ";
$result1 = mysqli_query($conn, $sql);

if (mysqli_num_rows($result1) > 0) 
{
   session_start();
    $_SESSION['uname']=$_POST['username'];
  echo"<script>alert('Login Successfully')</script>";
    echo"<script>window.location='student1.php'   </script>";
    mysqli_close($conn);
}
    else
    {
     echo"<script>alert('User id and password Wrong')</script>";   
    }
}
?>