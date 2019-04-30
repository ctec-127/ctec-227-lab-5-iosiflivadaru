<!DOCTYPE html>
<?php 
  require_once 'inc/ctec_functions.php';  
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Iosif Livadaru - Functions (lab5)</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-12 mt-3 mb-5">

      <h4>The variables used for this assignment:</h4>
      <?php 
        $string = 'iosif"s lab';
        $newString = "hello";
        $number = 21;
        $newNumber = 40;
        $associativeArray = ['min' => 3, 'max' => 7];
        $array  = [2, 3, 5, 7, 9, 21, 'hello'];  
        $email = 'nobody@nowhere.com';
        $requiredString = '.com';   
        $errors = ['Invalid Email', 'Wrong Password', 'Wrong Username'];
        
        echo "<p>";
        echo '$string = ' . "'$string';" . "<br>"; 
        echo '$newString = ' . "'$newString';" . "<br>"; 
        echo '$email = ' . "'$email';" . "<br>"; 
        echo '$requiredString = ' . "'$requiredString';" . "<br>"; 
        echo '$number = ' . "$number;" . "<br>";
        echo '$newNumber = ' . "$newNumber;" . "<br>";
        echo '$associativeArray = ' . "['min' => 3, 'max' => 7];" . "<br>";
        echo '$array = ' . "[2, 3, 5, 7, 9, 21, 'hello'];" . "<br>";
        echo '$errors = ' . "['Invalid Email', 'Wrong Password', 'Wrong Username'];";
        echo "</p>";
      ?>
      
      <div class="d-flex flex-row flex-wrap">
      <!-- Function #1 -->
      <div class="card mr-3 mb-3 w-auto">
        <h5 class="card-header">Function 1</h5>
        <div class="card-body">
          <h5 class="card-title">is_post_request()</h5>
          <p class="card-text">
          <?php             
            if (is_post_request()) {
              echo "the request is post";
            } else {
              echo "the request is not post";
            }
          ?>
          </p>
        </div>
      </div>

      <!-- Function #2 -->
      <div class="card mr-3 mb-3 w-auto">
        <h5 class="card-header">Function 2</h5>
        <div class="card-body">
          <h5 class="card-title">is_get_request()</h5>
          <p class="card-text">
          <?php             
            if (is_get_request()) {
              echo "the request is get";
            } else {
              echo "the request is not get";
            }
          ?>
          </p>
        </div>
      </div>

      <!-- Function #3 -->
      <div class="card mr-3 mb-3 w-auto">
        <h5 class="card-header">Function 3</h5>
        <div class="card-body">
          <h5 class="card-title">h($string)</h5>
          <p class="card-text">
          <?= h($string); ?>
          </p>
        </div>
      </div>

      <!-- Function #4 -->
      <div class="card mr-3 mb-3 w-auto">
        <h5 class="card-header">Function 4</h5>
        <div class="card-body">
          <h5 class="card-title">u($string)</h5>
          <p class="card-text">
          <?= u($string); ?>
          </p>
        </div>
      </div>

      <!-- Function #5 -->
      <div class="card mr-3 mb-3 w-auto">
        <h5 class="card-header">Function 5</h5>
        <div class="card-body">
          <h5 class="card-title">raw_u($string)</h5>
          <p class="card-text">
          <?= raw_u($string); ?>
          </p>
        </div>
      </div>

      <!-- Function #6 -->
      <div class="card mr-3 mb-3 w-auto">
        <h5 class="card-header">Function 6</h5>
        <div class="card-body">
          <h5 class="card-title">raw_u($string)</h5>
          <p class="card-text">
          <?php
            if (is_blank($string)) {
              echo "the variable is blank";
            } else {
              echo "the variable is not blank";
            }
          ?>
          </p>
        </div>
      </div>

      <!-- Function #7 -->
      <div class="card mr-3 mb-3 w-auto">
        <h5 class="card-header">Function 7</h5>
        <div class="card-body">
          <h5 class="card-title">has_presence($string)</h5>
          <p class="card-text">
          <?php
            if (has_presence($string)) {
              echo "the variable has presence";
            } else {
              echo "the variable does not have presence";
            }
          ?>
          </p>
        </div>
      </div>

      <!-- Function #8 -->
      <div class="card mr-3 mb-3 w-auto">
        <h5 class="card-header">Function 8</h5>
        <div class="card-body">
          <h5 class="card-title">has_length_greater_than($string, $i)</h5>
          <p class="card-text">
          <?php
            for ($i=0; has_length_greater_than($string, $i) ; $i++) { 
              echo "loop $i, ";
            }
          ?>
          </p>
        </div>
      </div>

      <!-- Function #9 -->
      <div class="card mr-3 mb-3 w-auto">
        <h5 class="card-header">Function 9</h5>
        <div class="card-body">
          <h5 class="card-title">has_length_less_than($string,$number)</h5>
          <p class="card-text">
          <?php
            if (has_length_less_than($string,$number)) {
              echo "The string length is less than the number given!";
            } else {
              echo "The string length is greater than the number given!";
            }
          ?>
          </p>
        </div>
      </div>

      <!-- Function #10 -->
      <div class="card mr-3 mb-3 w-auto">
        <h5 class="card-header">Function 10</h5>
        <div class="card-body">
          <h5 class="card-title">has_length_exactly($string,$number)</h5>
          <p class="card-text">
          <?php
            if (has_length_exactly($string,$number)) {
              echo "The string length is equal with the number given!";
            } else {
              echo "The string length is not equal with the number given!";
            }
          ?>
          </p>
        </div>
      </div>

      <!-- Function #11 -->
      <div class="card mr-3 mb-3 w-auto">
        <h5 class="card-header">Function 11</h5>
        <div class="card-body">
          <h5 class="card-title">has_length($newString,$associativeArray)</h5>
          <p class="card-text">
          <?php
            if (has_length($newString,$associativeArray)) {
              echo "The string used is '$newString'<br>";
              echo "The string length is in between ". $associativeArray['min']. " and ". $associativeArray['max'];
            } else {
              echo "The string used is '$newString'<br>";
              echo "The string length is not in between ". $associativeArray['min']. " and ". $associativeArray['max'];
            }
          ?>
          </p>
        </div>
      </div>

      <!-- Function #12 -->
      <div class="card mr-3 mb-3 w-auto">
        <h5 class="card-header">Function 12</h5>
        <div class="card-body">
          <h5 class="card-title">has_inclusion_of($number,$array)</h5>
          <p class="card-text">
          <?php
            if (has_inclusion_of($number,$array)) {
              echo "The number used is: $number<br>";
              echo "The number is in the array given";
            } else {
              echo "The number used is: $number<br>";
              echo "The number is not in the array given";
            }
            echo "</p>";
            echo '<br><h5 class="card-title">has_exclusion_of($string,$array)</h5>';
            echo "<p>";
            if (has_inclusion_of($string,$array)) {
              echo "The string used is: '$string'<br>";
              echo "The string is in the array given";
            } else {
              echo "The string used is: '$string'<br>";
              echo "The string is not in the array given";
            }
          ?>
          </p>
        </div>
      </div>

      <!-- Function #13 -->
      <div class="card mr-3 mb-3 w-auto">
        <h5 class="card-header">Function 13</h5>
        <div class="card-body">
          <h5 class="card-title">has_exclusion_of($newNumber,$array)</h5>
          <p class="card-text">
          <?php
            if (has_exclusion_of($newNumber,$array)) {
              echo "The number used is: $newNumber<br>";
              echo "The number is not in the array given";
            } else {
              echo "The number used is: $newNumber<br>";
              echo "The number is in the array given";
            }
            echo "</p>";
            echo '<br><h5 class="card-title">has_exclusion_of($newString,$array)</h5>';
            echo "<p>";
            if (has_exclusion_of($newString,$array)) {
              echo "The string used is: '$newString'<br>";
              echo "The string is not in the array given";
            } else {
              echo "The string used is: '$newString'<br>";
              echo "The string is in the array given";
            }
          ?>
          </p>
        </div>
      </div>

      <!-- Function #14 -->
      <div class="card mr-3 mb-3 w-auto">
        <h5 class="card-header">Function 14</h5>
        <div class="card-body">
          <h5 class="card-title">has_string($email, $requiredString)</h5>
          <p class="card-text">
          <?php
            if (has_string($email, $requiredString)) {
              echo "The given email: $email<br>";
              echo "The required string: $requiredString<br>";
              echo "The required string is found in the given string!";
            } else {
              echo "The given email: $email<br>";
              echo "The required string: $requiredString<br>";
              echo "The required string is not found in the given email!";            
            }
          ?>
          </p>
        </div>
      </div>

      <!-- Function #15 -->
      <div class="card mr-3 mb-3 w-auto">
        <h5 class="card-header">Function 15</h5>
        <div class="card-body">
          <h5 class="card-title">has_valid_email_format($email)</h5>
          <p class="card-text">
          <?php
            if (has_valid_email_format($email)) {
              echo "The given email: $email<br>";
              echo "The email is valid!";
            } else {
              echo "The given email: $email<br>";
              echo "The email is not valid!";
            }
          ?>
          </p>
        </div>
      </div>

      <!-- Function #16 -->
      <div class="card mr-3 mb-3 w-auto">
        <h5 class="card-header">Function 16</h5>
        <div class="card-body">
          <h5 class="card-title">display_errors($errors)</h5>          
          <?= display_errors($errors); ?>          
        </div>
      </div>

      </div><!-- flex -->
    </div><!-- col-12 -->
  </div><!-- row -->
</div><!-- container -->

</body>
</html>