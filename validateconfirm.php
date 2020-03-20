<!DOCTYPE html>
<html>
<head>
<title>Validation confirm</title>
<link rel="stylesheet" type="text/css" href="validatecss.css">
</head>
<body>
<div class=""pageContainer centerText">
<?php

include 'validationutilities.php';

$email=$_POST['email'];
$fname=$_POST['fname'];
$birthday=$_POST['birthday'];
$age=$_POST['age'];
$state=$_POST['state'];
$zip=$_POST['zip'];


echo "Email: $email <br>";
echo "First Name: $fname <br>";
echo "Birthday: $birthday <br>";
echo "Age: $age <br>";
echo "State: $state <br>";
echo "Zip: $zip <br>";



//set validation flag
$IsValid = true;

echo "<p class='centeredNotice'>";

if(!fIsValidEmail($email))
{
echo "Invalid email<br>";
$IsValid = false;
}

if(!fIsValidLength($fname, 2, 20))
{
echo "Enter first name (2-20 characters)<br>";
$IsValid = false;
}

if(!IsValidDate($birthday))
{
echo "Enter valid birth date<br>";
$IsValid = false;
}

if(!fIsValidRange($age, 1, 100))
{
echo "Enter valid age<br>";
$IsValid = false;
}     

if(!fIsValidStateAbbr($state))
{
echo "Enter 2-character state abbreviation<br>";
$IsValid = false;
}

if(!fIsValidZip($zip))
{
echo "Enter 5-digit zip code<br>";
$IsValid = false;
}

echo "</p>";

if(!$IsValid)
{
echo "<img class='validImage' src='x.png' /><br><br>
<p><input type='button' class='button' value='<< Go Back <<'onClick='history.back()'><br></p>";
exit();
}

echo "<div class='center'>
<img class='validImage' src='green.png'/>
<h3>All inputs have valid formats!</h3>
Email: $email <br>
First name: $fname <br>
Birthday: $birthday <br>
Age: $age <br>
State: $state <br>
Zip: $zip <br>
";

?>
</div>
</body>
</html>