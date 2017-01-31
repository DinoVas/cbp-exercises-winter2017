<?php 

require_once('function.php');
require_once('myfunctions.php');
//get_names()
//get_ratings

$unique_id='tt0108052';

$ids_of_movies=array(
  'tt0111161',
  'tt0068646',
  'tt0071562',
  'tt0468569',
  'tt0050083',
  'tt0108052',
  'tt0110912', 
  'tt0167260', 
  'tt0060196', 
  'tt0137523', 
  );


?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo get_name($unique_id); ?></title>
</head>
<body>


	<h1><?php echo get_name($unique_id)?></h1>

	<div class="rating">
		Rating:<strong><?php echo get_rating($unique_id)?></strong>
	</div>	



</body>
</html>