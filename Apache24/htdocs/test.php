<html>
  <body>
    <h1>My first PHP page</h1>
    <?php
    $x = 5; // global scope
    $y = 10.5;

    function myTest() {
      $x = 7; // Local Scope
      echo "<p>Variable x inside function is : $x</p>";
    }
    myTest();

    echo "<p>Variable x outside function is : $x</p>";

    function globalTest() {
      global $x, $y; // used to access a global variable from within a function
      $y = $x + $y;
    }
    globalTest();

    echo $y . "<br>";

    function upperTest() {
      static $x = 0;
      echo $x . "<br>";
      $x++;
    }
    upperTest();
    upperTest();
    upperTest();

    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>";

    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";

    $t = true;
    var_dump($t);
    echo "<br>";

    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    echo "<br>";

    class Car {
        function Car() {
            $this->model = "VW";
        }
    }

    // create an object
    $herbie = new Car();

    // show object properties
    echo $herbie->model;
    ?>


  </body>
</html>
