<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <title>Assignment BE.0.1</title>
      </head>
      <body>
            <header>
                  <h1>Assignment BE.0.1</h1>
                  <h3>Drilon Braha, 04-09-2018</h3>
            </header>

            <?php
                  $array_value_1 = $_GET['value1'];
                  $array_value_2 = $_GET['value2'];
                  $array_value_3 = $_GET['value3'];
                  $array_value_4 = $_GET['value4'];

                  $array = array($array_value_1, $array_value_2, $array_value_3, $array_value_4);

                  echo "<pre>";
                  print_r($array);
                  echo "</pre>";
            ?>

            <br>

            <?php
                  function highestNumber() {
                        global $array_value_1;
                        global $array_value_2;
                        global $array_value_3;
                        global $array_value_4;

                        echo "The largest number is: " . max($array_value_1, $array_value_2, $array_value_3, $array_value_4);
                  }

                  function lowestNumber() {
                        global $array_value_1;
                        global $array_value_2;
                        global $array_value_3;
                        global $array_value_4;

                        echo "The smallest number is: " . min($array_value_1, $array_value_2, $array_value_3, $array_value_4);
                  }

                  highestNumber();
                  echo "<br>";
                  lowestNumber();
            ?>
      </body>
</html>
