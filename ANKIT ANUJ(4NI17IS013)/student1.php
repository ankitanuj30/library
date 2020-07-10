<html>
<head>
<title>library management</title>
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

 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
     margin-left:25%;
}
#l{
background-image: url("1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
h2{
font-size:40px;
}
    td, th {
  border: 10px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<div id="l">
<h1>The National Institue Of Engineering</h1>
</div>
<marquee><h2>Welcome To Online Library Management</h2></marquee>
    <div class="container">
<?php
include'connection.php';
$sql = "SELECT *FROM book_images where branch='cse'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo"<tr><th>book's name</th><th>author;s name</th><th>edition</th><th>price</th><th>image</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
            echo"<tr>";
            echo"<td>" . $row["name"]."</td>";
         echo"<td>". $row["author"]."</td>";
        echo"<td>". $row["edition"]."</td>";
        echo"<td>" . $row["price"]."</td>";
        echo"<td><img height='150' src=cse/$row[image]></td>";
        echo"<td><a href='cart1.php?id=$row[id]'>view</td>";
        echo"</tr>";
     
           
    }
    echo"</table>";
}
 ?>
    </div>
</body>
</html>