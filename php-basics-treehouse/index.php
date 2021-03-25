<?php $display_name = 'Papa Jones';?>
<!DOCTYPE html>

<head>
  <meta charset=utf-8>
  <title>PHP Basics by
    <?php echo $display_name; ?>
  </title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="css/prism.css" type="text/css" />
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
      <h1 class="today-on-treehouse">Today, on TreeHouse</h1>
      <h2 class="pretty-hoppin-party">PHP - Pretty Hoppin' Party?</h2>
      <div class="badges">
        <?php include 'inc/treehouse-badges/index.php'; ?>
      </div>
      <hr />
  <h2 class="arrays-header">Arrays</h2>
  <p class="arrays-description">
  In PHP, arrays are actually ordered maps. A map is a type that associates values to keys. This type is optimized for several different uses; it can be treated as an array,
  list (vector), hash table (an implementation of a map), dictionary, collection, stack, queue, and probably more. As array values can  be other arrays, trees and multidimensional arrays are also possible.
<br>

<?php include 'inc/arrays/php-multidimensional-arrays.php'; ?>

<br>
  <h2 class="array-keys-header">Array Keys</h2>
  <ul class="array-keys">
    <li>Case-Sensitive</li>
    <li>They must be unique or they will be overwritten</li>
    <li>Can be Integer or String</li>
    <li>Can be a combination of Integers and Strings</li>
  </ul>

Can either be an integer or a string. (The value can be of any type.)<br>
Can be a combination of integers and strings. <br>

</p>
<h2 class="arrays-header" id="key-casting">Key Casting</h2>
<p class="arrays-description">
Strings containing valid integers will be cast to the integer type. E.g. the key "8" will actually be stored under 8.
On the other hand "08" will not be cast, as it isn't a valid decimal integer.
Floats are also cast to integers, which means that the fractional part will be truncated. E.g. the key 8.7 will actually be stored under 8.
Bools are cast to integers, too, i.e. the key true will actually be stored under 1 and the key false under 0.
Null will be cast to the empty string, i.e. the key null will actually be stored under "".
Arrays and objects can not be used as keys. Doing so will result in a warning: Illegal offset type.
If multiple elements in the array declaration use the same key, only the last one will be used as all others are overwritten.
  </p>
  <br>
  <?php include 'inc/time-is-the-answer.php';?>

</code>
</pre>
</figure>
</section>
</div>
<section class="footer text-center">
  &copy;<?php 
    echo date('Y');
    echo "  " . $display_name . '.';
    echo "  last modified on " . date("F d Y", getlastmod()); ?>
</section>
  
<div id="treehouse-badges"></div>
<script src="badges.js"></script>
<script src="js/prism.js"></script>

</body>
</html>