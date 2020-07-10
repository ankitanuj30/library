<html>
<head>
<title>library management</title>
</head>
<body>
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
input[type=text]{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus {
    background-color: #ddd;
    outline: none;
}
input[type=submit] {
    float: right;
    margin-right:655px;
    margin-top: -05px;
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
#g{
text-align:center;
font-size:20px;}
</style>
<div id="l">
<h1>The National Institue Of Engineering</h1>
</div>
<ul class="nav">
  <li><a href="registration.php">Enroll Now</a></li>
<div class="dropdown">
<div class="p">
  <li><a href="">Books' List</a></li>
</div>
<div class="dropdown-content">
    <a href="book_show.php">View All Books</a>
         <a href="">Edit books' list</a>
    <a href="">Add Books</a>
    <a href="">Delete Books</a>
  </div>
</div>
  <li><a href="">Books Issue</a></li>  

  <li><a href="">Book Return</a></li>           
</ul>
<marquee><h2>Welcome To Online Library Management</h2></marquee>
<?php
$current_date=date("Y-m-d");
    include'connection.php';
    $sql = "SELECT *FROM issue WHERE college_date='".$current_date."'";
    $result = mysqli_query($conn, $sql);
    echo "$current_date";
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
                echo"<tr><th>email: </td><th>" . $row["email"];
    }
        } else {
    echo"<script>alert('Wrong')</script>";   
}
    ?>
</body>
</html>