<html>
<head>
<title>library management</title>
</head>
<body>
     <a href="destroy.php">Logout</a>
<style>
h1
{ margin-left:30%;
padding-top:20px;
padding-bottom:10px;
}
#l{
background-image: url("1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
.nav {
    background-color: yellow; 
    padding: 15px;
    list-style-type: none;
    text-align: center;
}
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.nav li {
    display: inline-block;
    font-size: 20px;
    padding-left: 20px;
    padding-right: 20px; 
}
.dropdown-content a:hover {
background-color: #f1f1f1;
}
.dropdown:hover .dropdown-content {
    display: block;
}
h2{
font-size:40px;
}
</style>
<div id="l">
<h1>The National Institue Of Engineering</h1>
</div>
<ul class="nav">
    <div class="dropdown">
<div class="p">
    <li><a href="">Enroll Now</a></li>
        </div>
    <div class="dropdown-content">
    <a href="registration.php">register student</a>
    <a href="show.php">show records</a>
     <a href="search_student.php">search student</a>
  </div>
 </div>
<div class="dropdown">
<div class="p">
  <li><a href="">Books' List</a></li>
</div>
<div class="dropdown-content">
    <a href="book_show.php">View All Books</a>
    <a href="edit_book_new.php">Edit books' list</a>
    <a href="add_books.php">Add Books</a>
  <a href="delete_books.php">Delete Books</a>
  </div>
</div>
  <li><a href="book_issue1.php">Books Issue</a></li>  

  <li><a href="book_return1.php">Book Return</a></li>
</ul>
<marquee><h2>Welcome To Online Library Management</h2></marquee>
</body>
</html>
<form method="POST" action="">
<label >month:</label>
<input type="text"  name="month2" >
<input type="submit" name="submit" value="issue">
</form>
<table border="1">
<?php
   if(isset($_POST['submit']))    
    {
include'connection.php';
$sql = "SELECT *FROM issue where status='0' and month='".$_POST['month2']."'" ;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo"<tr><th>email: </td><th>" . $row["email"];
        echo"<tr><th>isbn: </td><th>" . $row["isbn"];
        echo"<tr><th>fee: </td><th>" . $row["fine"];
        echo"</th>";
        echo"</tr>";
        
    }
} else {
    echo"<script>alert('Wrong')</script>";   
}
   }
    ?>