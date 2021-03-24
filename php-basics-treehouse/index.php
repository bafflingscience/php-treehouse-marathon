<?php $display_name = 'Papa Jones';?>
<!DOCTYPE html>
  <head>
  	<meta charset=utf-8>
  	<title>PHP Basics by
      <?php echo $display_name; ?>
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
  	<link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <div id="wrap">
        <section class="sidebar text-center">
          <div class="avatar">
            <img src="img/Portfolio-Images/starGrey.svg" alt="Alt For Image">
          </div>
          <h1><?php echo $display_name; ?></h1>
          <p>Contact:<br />
          <a href="https://goodtech.tips" target="_blank">g o o d t e c h . t i p s</a></p>
          <hr />
          <img src="img/Portfolio-Images/frames_all.svg">
          <hr />
          <p><?php echo date('D, d M Y'); ?></p>
        </section>
        <section class="main">
          <h1>It's Finally Here! You know the thing!</h1>
          <h2>In other news</h2>
          <!-- <h3>Come Fly With Me.<h3>
          </p>Through the forest, soaring like the Majestic Flying Squirrel </p>    -->
          <hr />
          <h1>Today, on TreeHouse</h1>
          <div class="badges">
            <?php include 'inc/treehouse-badges/index.php'; ?>
          </div>
            <hr />
          <h2>Daily Exercise</h2>
          <p>I gotcha daily exercises right here!</p>
          <h2>Unit Conversioninator 5000</h2>
          <?php include 'inc/units.php'; ?>
          <h3>Time is the Answer.</h3>
          <?php include 'inc/time-is-the-answer.php'; ?>
        </section>
    </div>
    <section class="footer text-center">
      &copy; 
      <?php 
        echo date('Y');
        echo "  " . $display_name . '.';
        echo "  last modified on " . date("F d Y", getlastmod()); 
      ?>
    </section>
<div id="treehouse-badges"></div>  
<script src="badges.js"></script>
</body>
</html>
