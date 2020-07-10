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
    #fg{
        margin-left: 35%;
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
<h1>Enter the isbn you want to delete</h1>
    <div id="fg">
<form method="POST" action="delete_books1.php">
<label for="isbn">isbn:</label>
<input type="text"  name="isbn" >
<input type="submit" name="submit" value="search">
</form>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
include'connection.php';
$sql = "SELECT *FROM booklist where isbn='".$_POST['isbn']."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
   session_start();
    $_SESSION['uname']=$_POST['isbn'];
  echo"<script>alert('search successful')</script>";
    echo"<script>window.location='delete_books1.php'</script>";
    mysqli_close($conn);
}
    else
    {
     echo"<script>alert('isbn wrong')</script>";   
    }
}
?>
