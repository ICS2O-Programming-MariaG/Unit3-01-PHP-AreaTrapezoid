<DOCTYPE html>
<html lang="en-ca">
  <head>
     <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Maria's Currency Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="MariaG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Calculating the Area of a Trapezoid in PHP - Maria Goemans</title>
  </head>
  <body>
    <?php 
      echo "<h1>Calculating the Area of a Trapezoid in PHP with User Input</h1>";
      echo "<p>Welcome! This web page will take your input and use the dimensions you choose to calculate the area of a trapezoid. See the image below for the calculations we will be using.</p>";
    ?>
    <img src="./images/formulas.png">
    <?php 
      echo "<h3>Your Input</h3>";
      echo "<p>Please fill in the form below to set the height and the lengths of sides a and b for a trapezoid. We will then calculate the area of the shape for you!</p>";
    ?>
    <!-- Form for user input -->
    <form action="./calculations.php" method="post" target="display-result">
      <label for="height">Height of the trapezoid</label>
      <input type="float" name="height" placeholder="Height..."><br><br>
      <label for="side-a">Length of side A</label>
      <input type="float" name="side-a" placeholder="Side A length..."><br><br>
      <label for="side-b">Length of side B</label>
      <input type="float" name="side-b" placeholder="Side B length..."><br><br>
      <input type="submit" value="Calculate">
    </form>
    <!-- Iframe to display results -->
    <iframe id="display-result" name="display-result"></iframe>
  </body>
</html>