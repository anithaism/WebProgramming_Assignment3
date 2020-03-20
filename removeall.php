<html>
<head>
<title>Remove letter</title>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $text = test_input($_POST["textbox"]);
     $letter = test_input($_POST["letter"]);
   }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Enter the text: <input type="text" name="textbox"><br>
Enter letter to remove: <input type="text" name="letter"><br>
<input type="submit">
</form>

<?php

function remove_all($text,$letter)
{

 $resultarr=array();

 $words = explode(" ", $text);
 $countwords=count($words);

 
for($x=0;$x<$countwords;$x++)
{
   $arr=str_split($words[$x]);
  
   foreach (array_keys($arr, $letter) as $key) {
    unset($arr[$key]);
   }
 
   $resultarr[$x]=implode("",$arr);
}
 
$groupIDStr=join("&nbsp",$resultarr);
echo "Result: " . $groupIDStr;
 
}

echo "The Entered Text is: " . $text ."<BR>";
echo "The Entered Letter is: " . $letter."<BR>";
echo remove_all($text,$letter);
?>

</body>
</html>