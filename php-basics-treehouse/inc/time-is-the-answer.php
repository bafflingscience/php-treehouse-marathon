<?php

// Comments to document steps

$time = 0;
$num = -2;
$name = 'Treehouse';
$bool = true;

// var_dump($time);
// var_dump($num );
// var_dump($name);
// var_dump($bool);
// echo "\n";
?>
<h2 class="time-is-answer">if / elseif / else</h2>
<figure>
  <figcaption>Important Things</figcaption>
  <pre>
    <code class="language-php">

/*
<br> Given four variables.
<br> We need to determine which variable evaluates to FALSE when compared as a boolean.
<br> This program uses conditional statements to determine the solution.

<br> One line should print:
<br> 'SOMEVARIABLE:
<br>    SOMEVARIABLE IS THE ANSWER.'

<br> Two lines should print:
<br> 'SOMEVARIABLE:
<br>    SOMEVARIABLE is not the answer.'

<br> But what does it all mean?

<br> ...if that is what happens...
<br> then you know the script worked,
<br> and you have reached the highest peak of programming prowess,
<br> there is nothing more to achieve because you have mastered everything.
<br> Now it's time to puff your chest out and say, "Look at me now world. Look at me now.".
<br> All that's left is the remote graduation ceremony,
<br> which will be taking place on the AskJeeves.com Conference Calling Software.
<br> This is where you will be able to see your hard work pay off.
<br> Opportunity knocks but once young grasshopper,
<br> The path to Prosperity does not draw you a map, and Virtue does not leave voicemails.
<br> Click now and submit your payment quickly, and you will receive
<br> your OFFICIAL PAPA JONES COMPUTER SCIENCE DIPLOMA OF ACHIEVEMENT AND PROSPERITY!
<br> Great Job!!
*/
      if ( $num == false ) {
        echo "\n" ."<p>NUM: <br>
        NUM IS THE ANSWER.</p><br>";
      } else {
        echo "<p>NUM: <br>
        num is not the answer</p><br>";
      }

      if ( $time == false ) {
        echo "<p>TIME:<br>
        <strong>TIME IS THE ANSWER!</strong></p><br>";
      } else {
        echo "<p>TIME: <br>
        time is not the answer.</p><br>";
      }

      if ( $name == false ) {
        echo "<p>NAME: <br>
        NAME IS THE ANSWER. </p><br>";
      } else {
        echo "<p>NAME: <br>
        name is not the answer.</p><br>";
      }

echo "
<p>

                        PHP makes it easy to do silly things with strings and whitespace

                                        ~ | ~ | ~ | ~ | ~ | ~ | ~ | ~ | ~

                                        B  I  G   .    .    .   F   A   N

                                        <=====>      <=====>      <=====> <br>
                                        <=====> [ -  +  -  +  - ] <=====> <br>
                                        <=====>      <=====>      <=====> <br>

</p>";
</code>
</pre>
</figure>

<figure>
  <figurecaption>More Something Or Other</figurecaption>
  <pre>
    <code class="language-php">

        $name = '';
        $time = '12:30:00';
        $num = -1;
        $bool = true;

        var_dump($name);
        var_dump($time);
        var_dump($num);
        var_dump($bool);

        if ($name == false) {
          echo "\nNAME es false";
         } else {
           echo "NAME es true";
          } echo "\n";
          
          if ($time == false) {
            echo "TIME es false";
          } else {
            echo "TIME es true\n";
          }
          
          if ($bool == false) {
            echo "BOOL is true";
          } else {
            echo "BOOL es false\n";
          }
          
          if ($num == false) {
            echo "NUM es false";
          } else {
            echo "NUM es true\n\n";
          }

        echo "$num\n";
        echo "$bool\n";
        echo "$time\n";
        echo "$name";
        echo "$string == false";


        $a = 1;
        if ($a > 1) {
          $a--;
          $a += 2;
        } elseif ($a < 1) { 
          $a++; 
        } else { 
          $a +=5; 
        } $a=$a + 2;
         echo $a;
        
        </code>
      </pre>
</figure>
<?php
?>