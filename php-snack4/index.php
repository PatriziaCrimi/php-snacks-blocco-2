<?php
/*
ASSIGNMENT
Crea due array che hanno un numero di elementi diversi.
Aggiungi elementi casuali all’array che ha meno elementi,
fino a quando ne avrà tanti quanti l’altro.
*/

// Variables initialization
$title = 'Arrays';
$subtitle = 'Equal length - adding up numbers';
$long_array = [];
$short_array = [];
$short_array_to_be_printed = [];
$long_array_length = 10;
$short_array_length = 6;
$min = 0;
$max = 100;

// Generating random numbers to fill up the Arrays
for ($i=0; $i < $long_array_length; $i++) {
  $current_number = rand($min, $max);
  $long_array[] = $current_number;
}

for ($i=0; $i < $short_array_length; $i++) {
  $current_number = rand($min, $max);
  $short_array[] = $current_number;
}

$short_array_to_be_printed = $short_array;

// Adding up random numbers to the shortest array
while(count($short_array) < count($long_array)) {
  $short_array[] = rand($min, $max);
}

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
            <p>The list of random numbers in the SHORT array is:</p>
            <ul>
              <?php
              foreach ($short_array_to_be_printed as $number) {
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
            <p>The list of random numbers in the LONG array is:</p>
            <ul>
              <?php
              foreach ($long_array as $number) {
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
                The quantity of random numbers in the SHORT array is:
              </p>
              <p>
                <?php
                  echo $short_array_length;
                ?>
              </p>
              <p>
                The quantity of random numbers in the LONG array is:
              </p>
              <p>
                <?php
                  echo $long_array_length;
                ?>
              </p>
            </div>
            <div class="results-box">
              <p> The final quantity of elements in both the arrays is equal. </p>
              <p>
                Number of elements in the ex-longest array is:
                <span>
                  <?php
                    echo count($long_array);
                  ?>
                </span>
              </p>
              <p>
                Number of elements in the ex-shortest array is:
                <span>
                  <?php
                    echo count($short_array);
                  ?>
                </span>
              </p>
              <p>
                The numbers added up to the ex-shortest array are:
                <span>
                  <?php
                  for ($i=$short_array_length; $i < count($short_array); $i++) {
                  ?>
                  <ul>
                    <li>
                      <?php
                        echo $short_array[$i];
                      ?>
                    </li>
                  </ul>
                  <?php
                  }
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
