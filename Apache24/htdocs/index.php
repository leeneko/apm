<html>
  <body>
    <h1>My first PHP page</h1>
    <?php
    $x = 5; // global scope
    $y = 10.5;
    $color = "red";
    $txt = "computer";

    echo $x."<br>";
    echo $y."<br>";
    echo "My favorite color is ".$color."<br>";
    echo "I love " . $txt . "!";
    // echo "I love $txt!<br>";
    echo $x + $y . "<br>";
    ?>

  </body>
</html>
