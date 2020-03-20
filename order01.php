<html>
<head>
<title>Select Model</title>
<link rel="stylesheet" type="text/css" href="ordercss.css">
</head>
<body>
 <div class="pageContainer">

         <h2 class="centerText">Select Model</h2>

         <form action="order02.php" method="post" class="formLayout">
            <div class="formGroup">
               <label>First name:</label>
               <input type="text" name="fname" class="textbox" autofocus required  
                      placeholder="First name" title="first name" maxlength="20" pattern="[A-Za-z'-]{2,20}" />
            </div>
            <div class="formGroup">
               <label> Car model:</label>
               <div class="formElements">
                  <input type="radio" name="model" id="mustang" required value="mustang">
                  <label for="mustang">Ford Mustang</label><br>
                  <input type="radio" name="model" id="subaru" required value="subaru">
                  <label for="subaru">Subaru WRX STI</label><br>
                  <input type="radio" name="model" id="corvette" required value="corvette">
                  <label for="corvette">Corvette</label><br>
               </div>

            </div>
            <div class="formGroup">
               <label></label>
               <button type="submit"> >> Next >> </button>

            </div>
            <div class="centerText vertGap55">
                              <button type="submit" formnovalidate>Submit without validation</button>
                              <br><br>
            <a href="?">Reload page</a>            
            </div>


      </div>

   </form>

</div>
</body>
</html>