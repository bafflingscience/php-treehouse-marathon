<?php $display_name = 'Papa Jones';?>
<!DOCTYPE html>
  <head>
  	<meta charset=utf-8>
  	<title>PHP Basics by
      <?php echo $display_name; ?>
    </title>
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
          <a href="mailto:dingalingdong@dilfdongs.com">dilfdongs.com</a></p>
          <hr />
          <img src="img/Portfolio-Images/frames_all.svg">
          <hr />
          <p><?php echo date('D, d M Y'); ?></p>
        </section>
        <section class="main">
          <h1>Why I love PCP</h1>
    
          <h2>Unit Conversioninator 5000</h2>
          <?php include 'inc/units.php'; ?>
          <hr />
          <h1>Today, on TreeHouse</h1>
          <div class="badges">
            <?php include 'inc/treehouse-badges/index.php'; ?>
          </div>
            <hr />
          <h2>Daily Exercise</h2>
          <p>I gotcha daily exercises right here!</p>
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