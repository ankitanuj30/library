<html>
<head>
<title>library management</title>
</head>
    <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
     <a href="destroy.php">Logout</a>
<style>
    .e{
        font-size:220%;
        text-emphasis: bold;
        margin-top:-25%;
        margin-left: 35%;
    }
     .f{
        font-size:220%;
        text-emphasis: bold,italic;
        margin-left: 35%;
    }
    .a{
        font-size:80%;
        text-emphasis: bold,italic;
        margin-left: 35%;
    }
    form{
        margin-top: 5%;
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

h2{
font-size:40px;
}
    table{
        margin-left:35%;
    }
        input[type=submit] {
   /* float: right;
    margin-right: 20px;
    margin-top: -35px;
    width: 80px;
    height: 30px;*/
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    background-color: blue;
    border-radius: 20px;
    border: 1px solid blue;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
   cursor: pointer;
}
td, th {
  border: 10px solid #dddddd;
  text-align: left;
  padding: 8px;
}


table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
     margin-left:25%;
}    
</style>
<div id="l">
<h1>The National Institue Of Engineering</h1>
</div>
<marquee><h2>Welcome To Online Library Management</h2></marquee>
    <?php
    include'connection.php';
    session_start();
$sql = "SELECT *FROM cart where customers_name='".$_SESSION['uname']."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo"<tr><th>Name</th><th>Description</th><th>Quantity</th><th>Price</th><th>image</th></tr>";
    while($row = mysqli_fetch_assoc($result)) 
    { 
        $row4 = $row["quantity"];
        $row5 = $row["price"];
        $row6 = $row4*$row5;
        echo"<tr>";
         echo"<td>". $row["customers_name"]."</td>";
          echo"<td>". $row["description"]."</td>";
          echo"<td>". $row["quantity"]."</td>";
          echo"<td>" .$row6."</td>";
         echo"<td><img height='100' src=cse/$row[image]></td>";
        echo"</tr>";
        
    }
} else {
    echo"<script>alert('Wrong')</script>";   
}