<?php
  // Single Line Comment
  echo 'Hello World';

  print 'Hello World';

  $cars = array("Volvo", "BMW", "Toyota");
  echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

?>
<?php
  // Indexable Array
  $colors = array('red', 'blue', 'green');

  print_r( $colors )
?>

<?php
  $home_towns = array(
    'Joe' => 'Paris',
    'Brian' => 'New York',
    'Jesus' => 'Nazaret',
  );

  echo '<pre>';
  print_r( $home_towns );
  echo '</pre>';

  // Joe Home Town;

  echo '<p>' . $home_towns['Joe'] . '</p >'
?>

<!-- Multidimentional Array -->

<?php
  $brothers = array(
    'Joe' => array(
      'age' => 34,
      'job' => 'Musisian',
    ),
    'Mike' => array(
      'age' => 23,
      'job' => 'Student',
    ),
    'Andre' => array(
      'age' => 34,
      'job' => 'CEO',
    ),
  );

  echo '<pre>';
  print_r( $brothers );
  echo '</pre>';

  echo '<p>' . $brothers['Joe']['job'] . '</p >';
  echo '<p>' . $brothers['Mike']['age'] . '</p >';

?>
