<?php
/*
ASSIGNMENT
Generatore di “nomi cognomi” casuali:
prendendo a caso un nome e un cognome da una lista di nomi e da una lista di cognomi,
Gatsby vuole generare una falsa lista di invitati.
*/

// Variables initialization
$title = 'Fake Guests List';
$subtitle = 'Names and surnames generator';
$guests_list = [];
$guests_number = 18;
$names_list = ['Matthew', 'Richard', 'Clark', 'Jodie', 'Carla', 'David', 'Simon', 'Ronnie', 'Nathalie', 'Kristine', 'Lucas', 'Henry', 'George', 'Louisa', 'Robin', 'Caroline', 'Helly', 'Roxanne'];
$surnames_list = ['Smith', 'Johnson', 'Brown', 'Williams', 'Miller', 'Davis', 'Anderson', 'Rodriguez', 'Taylor', 'Jackson', 'Lopez', 'Harris', 'Clark', 'Lewis', 'Robinson', 'White', 'Ford', 'Carlson'];

// *********** Generating false list of guests ***********
while(count($guests_list) < $guests_number) {
  $index_name = rand(0, count($names_list) - 1);
  $index_surname = rand(0, count($surnames_list) - 1);
  $random_guest = $names_list[$index_name] . ' ' . $surnames_list[$index_surname];
  // Check and discard homonyms
  if(!in_array($random_guest, $guests_list)) {
    // Adding current fake guest to fake guests list (array)
    $guests_list[] = $random_guest;
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 1</title>
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
            <p>The list of available names is:</p>
            <ul>
              <?php
              foreach ($names_list as $key => $name) {
              ?>
              <li>
                <?php
                  echo $name;
                ?>
              </li>
              <?php
              }
              ?>
            </ul>
            <p>The list of available surnames is:</p>
            <ul>
              <?php
              foreach ($surnames_list as $key => $surname) {
              ?>
              <li>
                <?php
                  echo $surname;
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
                The fake list of guests is the following:
              </p>
              <ul>
                <?php
                  foreach ($guests_list as $key => $guest) {
                ?>
                <li>
                  <?php
                    echo $guest;
                  ?>
                </li>
                <?php
                  };
                ?>
              </ul>
            </div>
            <div class="results-box">
              <p>
                <span>
                  <?php
                    echo $guests_number;
                  ?>
                </span>
                have just been generated.
              </p>
            </div>
          </div>
        </div>
      </div>  <!-- End of container -->
    </div>  <!-- End of page wrapper -->
  </body>
</html>
