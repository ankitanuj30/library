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
    
</style>
<div id="l">
<h1>The National Institue Of Engineering</h1>
</div>
<marquee><h2>Welcome To Online Library Management</h2></marquee>
<?php
include'connection.php';
$sql = "SELECT *FROM book_images where id='".$_GET['id']."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    { 
        echo"<img height='55%' src=cse/$row[image] style=margin-left:5%;>";
        echo '<div class="e">';
        echo"<tr><td>description:  </td><td>" . $row["name"];
                echo '</div>';
        echo '<div class="f">';
        echo"<tr><td>price: </td><td>" . $row["price"];
        echo'</div>';
         echo'<form action="cart2.php" method="GET" style=margin-left:35%;>';
    echo "quantity: <input type='text' placeholder='quantity' name='quantity'>";
        echo'<br>';
         echo'<div class="btn"style=margin-left:5%>';
        echo"<input type=hidden name=id value=$row[id]>";
         echo"<input type=submit value='Add to Cart'>";
         echo"<a href='add_to_cart.php'>view cart";
        echo'</div><br>';
        echo'<div class="btn btn-success" style=margin-left:6%;>';
         echo"<a href='buy.php?id=$row[id]'>buy this product only";
        echo'</div>';
        echo'</form>';
       
    }
}
    ?>

       </body>
</html>