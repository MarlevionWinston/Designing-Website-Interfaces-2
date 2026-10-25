<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CC's Application Page</title>
    <!-- link to the external css file -->
    <link rel="stylesheet" href="CC's.css">
    <!-- link to the external JavaScript file; defer to wait to run the JavaScript code until all of the HTML elements have loaded -->
     <script src="CC's.js" defer></script>
</head>
<body>
    
    <header>
        <?php include 'CCs_menu.php'; ?>
        <h1>Coding Company application</h1>
    </header>
    <main>
       <!-- we need a form with at least 5 inputs, mix of numbers and text inputs -->
       <div id="divMsg"></div>

  <form name="frmApp" id="frmApp" action="process_app.php" method= "post" onsubmit="return validateForm();">
   <div>
    <label for="txtName">Your Name:</label>
    <input type="text" id="txtName" name="txtName">
   </div>

   <div>
    <label for="numYears">Years of Experience:</label>
    <input type="number" id="numYears" name="numYears">
   </div>


 <button type="submit" id="btnSubmit" name="btnSubmit">Submit Application</button>
  </form>
</main>
</body>
</html>