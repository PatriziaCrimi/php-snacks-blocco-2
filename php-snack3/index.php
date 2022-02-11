<?php
/*
ASSIGNMENT
Crea un array vuoto
e genera un numero casuale tra 0 e 100
da inserire nell’array.
Continua a generare numeri casuali
e a inserirli nell’array
fino a quando la somma degli elementi è minore di 50.
*/

// Variables initialization
$title = 'Arrays';
$subtitle = 'Adding up numbers';
$numbers_array = [];
$min = 0;
$max = 50;
$sum = 0;
$sum_to_be_printed = 0;
$extra_number = 0;
$limit = 50;

// Creation of random integers array
do {
  $random_number = rand($min, $max);
  $sum += $random_number;
  if($sum < $limit) {
    $numbers_array[] = $random_number;
    $sum_to_be_printed = $sum;
  } else {
    $extra_number = $random_number;
  }
} while($sum < $limit);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <div id="page-wrapper">
      <div class="container">
        <div class="row">
          <h1>
            <?php echo $title; ?>
          </h1>
        </div>
        <div class="row">
          <h2>
            <?php echo $subtitle; ?>
          </h2>
        </div>
        <div class="row">
          <!-- Printing data -->
          <div id="data-info">
            <h3>Data Information</h3>
            <p>The list of random numbers is:</p>
            <ul>
              <?php
              foreach ($numbers_array as $number) {
              ?>
              <li>
                <?php
                  echo $number;
                ?>
              </li>
              <?php
              }
              ?>
            </ul>
          </div>
        </div>
        <div class="row">
          <!-- Results -->
          <div id="results">
            <h3>Results</h3>
            <div class="message">
              <p>
                The quantity of random numbers in the array is:
              </p>
              <p>
                <?php
                  echo count($numbers_array);
                ?>
              </p>
            </div>
            <div class="results-box">
              <p>
                The sum of the numbers until it's less than
                <?php
                  echo $limit;
                ?>
                 is:
                <span>
                  <?php
                    echo $sum_to_be_printed;
                  ?>
                </span>
              </p>
              <p>
                The last number randomly generated is:
                <span>
                  <?php
                    echo $extra_number;
                  ?>
                </span>
              </p>
              <p>
                The final sum of numbers exceeding the limit of
                <?php
                  echo $limit;
                ?>
                 is:
                <span>
                  <?php
                    echo $sum;
                  ?>
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>  <!-- End of container -->
    </div>  <!-- End of page wrapper -->
  </body>
</html>
