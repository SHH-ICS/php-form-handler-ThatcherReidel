<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
  </head>

  <body>
    
    <?php
    echo "<h1>Hello, World!</h1>\n";
    ?>
    
    Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
  </body>
  
</html>
