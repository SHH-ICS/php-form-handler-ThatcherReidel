<!DOCTYPE html>
<html>
  <head>
  <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="styles.css">
    <title>Page Title</title>
  </head>

  <body>
 
  <form action="handler.php" method="post">
Name: <input type="text" name="name"><br>
<input type="submit">
</form>

    <?php
    echo "<h1>Hello, World!</h1>\n";
    ?>

  </body>

</html>