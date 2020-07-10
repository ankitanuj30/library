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
</style>
<div id="l">
<h1>The National Institue Of Engineering</h1>
</div>
<marquee><h2>Welcome To Online Library Management</h2></marquee>
<h2>your items will be added in ur cart soon ...</h2>
</body>
</html>
<?php
include'connection.php';
session_start();
    $sql = "SELECT *FROM book_images where id='".$_GET['id']."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    { 
        //session_start();
        $row1 = $row["branch"];
        $row2 = $row["image"];
        $row3 = $row["price"];
        $row4 = $row["name"];
    $sql1 = "INSERT INTO cart (	customers_name,description,price,image,quantity)
            VALUES ('".$_SESSION['uname']."','".$row4."','".$row3."','".$row2."','".$_GET['quantity']."') ";
if (mysqli_multi_query($conn, $sql1)) {
                echo "<script>successfully added to cart</script>";
            } else {
                echo "Error: " ;
                echo "wrong";
            }
    }
}

 ?>
   
 