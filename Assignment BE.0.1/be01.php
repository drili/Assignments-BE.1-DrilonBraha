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
                  echo "Value nr. 1 is " . $_GET["value1"] . "<br>";
                  echo "Value nr. 2 is " . $_GET["value2"] . "<br>";
                  echo "Value nr. 3 is " . $_GET["value3"] . "<br>";
            ?>

            <br>

            <?php
                  $value_1 = $_GET["value1"];
                  $value_2 = $_GET["value2"];
                  $value_3 = $_GET["value3"];

                  if ($value_1 > $value_2 && $value_1 > $value_3) {
                        echo "the biggest number is: " . $value_1;
                  } elseif ($value_2 > $value_1 && $value_2 > $value_3) {
                        echo "the biggest number is: " . $value_2;
                  } elseif ($value_3 > $value_1 && $value_3 > $value_2) {
                        echo "the biggest number is: " . $value_3;
                  } else {
                        return;
                  }
            ?>
      </body>
</html>
