<?php

  if ( $a > $b ) {
    echo '$a is greater than $b';
  }


  if ( $a > $b ) {
    echo '$a is greater than $b';
  } else {
    echo '$a is not greater than $b';
  }


  if ( $a > $b ) {
    echo '$a is greater than $b';
  } else if ( $a < $b ) {
    echo '$a is not greater than $b';
  } else {
    echo '$a and $b might be equal';
  }


// Alternative Syntax

 if ( $condition_to_check ):
  // code to execute;
 elseif ( $another_condition ):
  // another code to do;
 else:
  // catch code;

 endif;

?>

<?php if ( $home_page) : ?>
  <header>
    <h1>Welcome back!</h1>
    <p>Do something nice</p>
  </header>
<?php endif; ?>


<!-- Yoda Conditions -->

<!-- Good -->
<?php if ( 10 == $i ) { /* TODO */} ?>

<!-- Bad -->
<?php if ( $i == 10 ) { /* TODO */} ?>


<!-- Ternay Operator -->

<?php
  $is_logged_in = true;

  $message = $is_logged_in ? "Welcome back" : "Hello extranger";
  echo $message;
  // "Welcome back"
?>







