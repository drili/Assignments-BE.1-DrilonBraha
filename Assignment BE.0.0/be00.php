<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <title>Assignment BE.0.0</title>
      </head>
      <body>

            <header>
                  <h1>Assignment BE.0.0</h1>
                  <h3>Drilon Braha, 04-09-2018</h3>
            </header>

            <br>

            <?php
                  // test 2
                  $i;
                  $num = 5;

                  for ($i = 0; $i < $num; $i++) {

                        $col;
                        $array_numbers = array(1, 0);

                        for ($col = 0; $col < $num; $col++) {
                              if ($i == $col) {
                                    print_r($array_numbers[0]);
                              } else {
                                    print_r($array_numbers[1]);
                              }
                        }

                        echo "<br>";
                  }
            ?>

      </body>
</html>
