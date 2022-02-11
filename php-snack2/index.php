<?php
/*
ASSIGNMENT
Crea un array di numeri interi
e fai la somma di tutti gli elementi che sono in posizione dispari.
*/

// Variables initialization
$title = 'Arrays';
$subtitle = 'Adding up numbers';
$integers_array = [];
$integers_quantity = 10;
$min = 0;
$max = 100;
$sum = 0;

// Creation of random integers array
while(count($integers_array) < $integers_quantity) {
  $current_number =  rand($min, $max);
  // Discarding duplicates
  if(!in_array($current_number, $integers_array)) {
    $integers_array[] = $current_number;
  }
}

// Looping the array
foreach ($integers_array as $key => $number) {
  // Checking odd position
  if($key % 2 != 0) {
    $sum += $number;
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 2</title>
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
              foreach ($integers_array as $key => $number) {
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
            <p>Starting from ZERO - The list of numbers in odd position is:</p>
            <ul>
              <?php
              foreach ($integers_array as $key => $number) {
              ?>
              <li>
                <?php
                if($key % 2 != 0) {
                  echo $number . " in position " . $key;
                }
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
                  echo $integers_quantity;
                ?>
              </p>
            </div>
            <div class="results-box">
              <p>
                The sum of the numbers in odd position is:
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
