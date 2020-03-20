<?php

if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$fname = $_POST['username'];
$pwd = $_POST['password'];
$postvalue = $_POST['postback'];

if ($pwd == 'guest' && strlen($fname) > 0) {
session_start();
$_SESSION['username'] = $_POST['username'];
echo "redirect";

 if(isset($_SESSION['username']) == true) {
        header("location: protected.php");

    }
  }
}
?>

<html>
   <head>
      <title>Login</title>
      <link href="protectedcss.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="pageContainer centerText">
         <h2>Login</h2>
         <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" class="formLayout">
            <div class="formGroup">
               <label>First name:</label>
               <input type="text" name="username" value="<?php echo $fname ?>" 
                      class="formElement" 
                      placeholder="first name" 
                      title="first name" required autofocus /><br>
                <div class="errormsg">
                <?php
                 if ($postvalue && strlen($fname) < 1) 
                 {
                   echo "Please enter your name."; 
                 }
                ?>
               </div>
            </div>                     
            
            <div class="formGroup">
               <label>Password:</label>
               <input type="password" name="password" class="formElement" 
                      placeholder="password"
                      title="password" required /><br>
               <label></label>(hint: password is 'guest')<br>
               <label></label>
             <span class="alert">&nbsp;
                           </span> 
              <div class="errormsg">
                <?php
                 if ($postvalue && strlen($pwd) < 1) 
                 {
                   echo "Please enter the password."; 
                 }
                ?>
               </div>          
            </div>

            <div class="formGroup">
               <label> </label>
               <input type="hidden" name="postback" value="true">
               <button type="submit" name="login">Login</button>
            </div>
            <div class="formGroup">
               <label></label>
               <button type="submit" formnovalidate>Login without HTML5 validation</button>
            </div>

            <div class="vertGap55 centerText">
                 <a href="protected.php">Try going to protected.php without logging on.</a>
            </div>
         </form>    

      </div>
   </body>
</html>