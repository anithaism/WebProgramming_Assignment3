<html>
<head>
<title>Order Confirmation</title>
<link rel="stylesheet" type="text/css" href="ordercss.css">
</head>
<body>
<div class="pageContainer centerText">
<?php

include 'validationutilities.php';


$IsValid = true;

$color=$_POST['color'];

$username = $_COOKIE['name'];
$modelname = $_COOKIE['model'];


if(!fIsValidLength($color, 2, 20))
{
echo "Enter color (2-20 characters)<br>";
$IsValid = false;
}

echo "</p>";

if(!$IsValid)
{
echo "<img class='validImage' src='x.png' /><br><br>
<p><input type='button' class='button' value='<< Go Back <<'onClick='history.back()'><br></p>";
exit();
}

echo "<h1>Order Confirmation</h1><br>
<h2>Congratulations $username you have ordered a $color $modelname !</h2><br>";

echo "<img src='{$modelname}{$color}.png' style='max-width: 50%;' /><br>

<a href='order01.php'>Place another order</a>";


?>
</div>
</body>
</html>
