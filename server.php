<?php


?>

<form method="POST" action="home.php" >
<input type="number" name="n1" placeholder="number">
<input type="number"  name="n2" placeholder="phone">

<input type="submit"  name="n5" > 

</form>

<form method="POST" action="">
red <input type="radio" name="color" value="red">
orange <input type="radio"  name="color" value="orange">
green <input type="radio" name="color" value="green">
<button type="submit" name="bkgrnd_color">change</button>

</form>

<?php
if(isset($_POST['bkgrnd_color']))
{
echo "<style> body { background : ".$_POST['color']."}</style>";
}
?>