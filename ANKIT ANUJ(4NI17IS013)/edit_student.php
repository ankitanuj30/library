<html>
<head>
<title>  </title>
</head>
<body>
    <a href="destroy.php">Logout</a>
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
    <?
    session_start();
    include'connection.php';

    $sql = "SELECT *FROM registeration1 WHERE book_id='".$_GET['id']."'";
  $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
    
    ?>
<form method="POST" action="" enctype="multipart/form-data">
    <div class="container">
        <hr>
         <?php
      include'connection.php';
$sql = "SELECT *FROM idgen";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);    
      ?>
 <label for="text"><b>First name :</b></label>
    <input type="text" placeholder="Enter Firstname" name="firstname" required>
 <label for="text"><b>Last name :</b></label>
    <input type="text" placeholder="Enter Lastname" name="lastname" required>
       <label for="text"><b>Father's name :</b></label>
    <input type="text" placeholder="Enter Father's name" name="fathersname" required>
       <label for="text"><b>Mother's name :</b></label>
    <input type="text" placeholder="Enter Mother's name" name="mothersname" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
       <label for="text"><b>Branch name :</b></label>
    <input type="text" placeholder="Enter Branch name" name="branch" required>
      <label>Photo</label>
    <input type="file" name="photo"><br><br>
      <label>Signature</label>
    <input type="file" name="signature">
    <hr>
         <button type="submit"  name="submit" class="registerbtn">update</button>
  </div>
  <div class="container signin">
  
  </div>
    </form>

</body>
<?php
    if(isset($_POST['submit']))
    {
include'connection.php';
$file = rand(1000,100000)."-".$_FILES['photo']['name'];//photo start
                                $file_loc = $_FILES['photo']['tmp_name'];
                            $file_size = $_FILES['photo']['size'];
                            $file_type = $_FILES['photo']['type'];
                            $folder="photo/";
                            // new file size in KB
                            $new_size = $file_size/1024;  
                            // new file size in KB
                            // make file name in lower case
                            $new_file_name = strtolower($file);
                            // make file name in lower case
                            $final_file=str_replace(' ','-',$new_file_name);//end photo end
        move_uploaded_file($file_loc,$folder.$final_file);
                $file1 = rand(1000,1000000)."-".$_FILES['signature']['name'];//photo start
                $file_loc1 = $_FILES['signature']['tmp_name'];
                $file_size1 = $_FILES['signature']['size'];
                            $file_type1 = $_FILES['signature']['type'];
                            $folder1="signature/";
                            // new file size in KB
                            $new_size1 = $file_size1/1024;  
                            // new file size in KB
                            // make file name in lower case
                            $new_file_name1 = strtolower($file);
                            // make file name in lower case
                            $final_file1=str_replace(' ','-',$new_file_name1);//end photo end
        move_uploaded_file($file_loc1,$folder1.$final_file1);
$sql = "UPDATE registeration1 SET firstname='".$_POST['firstname']."',lastname='".$_POST['lastname']."',fathersname='".$_POST['fathersname']."',mothersname='".$_POST['mothersname']."',email='".$_POST['email']."',branch='".$_POST['branch']."',photo='".$final_file."',signature='".$final_file1."' WHERE id='".$_GET['id']."'";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('successfully Update') </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
    }
    
?>