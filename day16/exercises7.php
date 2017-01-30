<?php 

$messages = array(
  'error' => array(
    'Something went wrong',
    'Something went REALLY wrong',
    'There is no end to this!'
  ),
  'warning' => array(
    'This is your first warning',
    'This is your final warning'
  ),
  'success' => array(
    'Finally, something was successful.'
  )
);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <?php foreach($messages as $key => $message) : ?>
  			  <?php echo $key; ?> <br/>
		 <?php foreach($message as $key => $gr) : ?>
  			  <?php echo $gr; ?> <br/>
    	<?php endforeach ?> 
    		
    <?php endforeach ?> 
</body>
</html>