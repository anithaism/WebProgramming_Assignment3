<html>
<head>
<title>Select Color</title>
<link rel="stylesheet" type="text/css" href="ordercss.css">
</head>
<body>
<div class="pageContainer centerText">
<?php

include 'validationutilities.php';


$IsValid = true;


$fname=$_POST['fname'];
$model=$_POST['model'];

setcookie('name',$_POST['fname']);
setcookie('model', $_POST['model']);

if(!fIsValidLength($fname, 2, 20))
{
echo "Enter first name (2-20 characters)<br>";
$IsValid = false;
}

if(!fIsValidLength($model, 2, 20))
{
echo "Enter model (2-20 characters)<br>";
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
<h3>Select Car</h3><br>
<div class='pageContainer'>
<form action='order03.php' method='post' class='formLayout'>
<div class='formGroup'>
                  <label>Car color:</label>
                  <div class='formElements'>
                     <select name='color' required >
                        <option  value=''></option>
                        <option style='background-color: blue; color:white;' value='blue'>Blue</option>
                        <option style='background-color: red' value='red'>Red</option>
                        <option style='background-color: yellow' value='yellow'>Yellow</option>
                     </select> 

                  </div>
               </div>
<div class='formGroup'>
                  <label></label>
                  <button type='submit'> >> Next >> </button>
               </div>
               <div class='centerText vertGap55'>
                  <button type='submit' formnovalidate>Submit without validation</button><br><br>
                  <a href='?'>Reload page</a>
               </div>
</form>
</div><br>
";

?>
</div>
</body>
</html>