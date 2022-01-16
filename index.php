<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link src="bootstrap.css" rel="stylesheet">
  <title>sm project php</title>
</head>
<body >

<!-- <form action="" method="POST">

<input type="text" placeholder="name" name="userName" required>
<input type="password" placeholder="password" name="password" required>
<input type="submit" value="login" name="login">

</form>

</body>
</html> -->

<?php


require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();

// $userName="walaa alomari";
// $password="1234";
// if(isset($_POST["login"]))
// {
// $name=$_POST["userName"];
// $getPassword=$_POST['password'];

// if($userName===$name && $getPassword===$password)
// {
//   session_start();
//   $_SESSION["user"]=$name;
//   $_SESSION["paswrd"]=$getPassword;
//   $_SESSION["login"]=true;
// echo "<script> location.replace('home.php') </script> " ;
// }
// else {

// echo "wrong password or user name" ;


// }

// }

?>























