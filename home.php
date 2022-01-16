<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link src="bootstrap.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
 <?php

 $userName="walaa alomari";
 $password="1234";
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['paswrd']) && isset($_SESSION['login']))
{
if($_SESSION['user']===$userName && $_SESSION['paswrd']===$password)
{
echo "<h2> hello  $userName </h2>";
echo "<form method='POST'> 
<input type='submit' value='logout' name='logout' >
</form>";
}
else{
    echo "<script> location.replace('index.php') </script> ";
}
}

if(isset($_POST["logout"])){

    session_unset();
    echo "<script> location.replace('index.php') </script> ";
}
 ?>
</body>
</html>