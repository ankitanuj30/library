<!DOCTYPE html>
<html>
<head>
<style>
body{
font-family:"Helvetica Neue", Helvetica, sans-serif; 
}


* {
    box-sizing: border-box;
}

.container {
margin-top:3%;
margin-left:30%;
 width:440px;
 height:45px;

}
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
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

.registerbtn {
     background-color: BLUE;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}
    .nav {
    background-color: yellow; 
    padding: 15px;
    list-style-type: none;
    text-align: center;
}

.signin {
    background-color: #f1f1f1;
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
</head>
<body>
     <a href="destroy.php">Logout</a>
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
<form method="POST" action="" >
  <div class="container">
    <hr>
 <label for="text"><b>isbn :</b></label>
    <input type="text" placeholder="isbn" name="isbn" required>
 <label for="text"><b>book name :</b></label>
    <input type="text" placeholder="book name" name="book_name" required>
       <label for="text"><b>autho's name :</b></label>
    <input type="text" placeholder="author's name" name="author" required>
       <label for="text"><b>category :</b></label>
    <input type="text" placeholder="category" name="category" required>
    <label for="text"><b>price</b></label>
    <input type="text" placeholder="price" name="price" required>
    <hr>
    <button type="submit"  name="submit" class="registerbtn">add</button>
      
  </div>
  
  <div class="container signin">
  
  </div>
</form>

</body>
</html>
<?php
if(isset($_POST['submit']))    
{ 
include'connection.php';
    $sql1 = "SELECT *FROM booklist where isbn='".$_POST['isbn']."'";
   $result = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result) > 0) 
{  
echo"<script>alert('book is already there')</script>";
  exit();
  }
  else
  {
    
$sql = "INSERT INTO booklist(isbn,book_name,author,category,price) 
VALUES ('".$_POST['isbn']."','".$_POST['book_name']."','".$_POST['author']."','".$_POST['category']."','".$_POST['price']."')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('successfully insert') </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
    }
    }
?>