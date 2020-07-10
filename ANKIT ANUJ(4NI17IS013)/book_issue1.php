<html>
<head>
<title>library management</title>
</head>
<body>
     <a href="destroy.php">Logout</a>
<style>
    /* For mobile phones: */
[class*="col-"] {
    width: 100%;
}
@media only screen and (min-width: 768px) {
    /* For desktop: */
    .col-1 {width: 29.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
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
        margin-left:30%;
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
<h1>Enter the email id and isbn </h1>
     <div id="fg">
<form method="POST" action="">
<label >email:</label>
<input type="text"  name="email" >
    <label >isbn:</label>
<input type="text"  name="isbn" >
<input type="submit" name="submit" value="issue">
</form>
</div>
</body>
</html>
<?php
$date2=date("Y-m-d");
    $dt1=explode('/',$date2);

$date7=date("M");
    $dt4=explode('/',$date7);
$date3=date("Y-m-d");
$date3=date("Y-m-d",strtotime("+15 day"));
if(isset($_POST['submit']))    
{
include'connection.php';
$sql = "INSERT INTO issue(isbn,email,status,date_issue,month,college_date) 
VALUES ('".$_POST['isbn']."','".$_POST['email']."','1','".$date2."','".$date7."','".$date3."')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('successfully insert') </script>";
    echo"Your due date is:";
    echo $date3;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
    }
?>