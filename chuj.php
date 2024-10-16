<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  $mysqli = mysqli_connect('127.0.0.1', 'root', '', 'sklep');
  $krzeslo=$_GET["Login"];
$krzysiu=$_GET["Haslo"];  
$q="INSERT INTO 'user' ('ID','login','Haslo','Szyfrowane') VALUES ('','$krzeslo','$krzysiu')";
?>
</body>
</html>