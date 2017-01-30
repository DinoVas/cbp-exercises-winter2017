<?php

$movies = array(
  'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'
);

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <ol>
  <?php foreach($movies as $key => $movie) : ?>
    <li>
      <?php echo $movie;?>
    </li>
    <?php endforeach ?> 

<ol>
  <?php sort($movies); ?>
  <?php for($i=0;$i<count($movies);$i++) :?>
   <li>
    <?php echo $movies[$i]; ?>
    </li>
  <?php endfor; ?>  
  </ol>

</body>
</html>











