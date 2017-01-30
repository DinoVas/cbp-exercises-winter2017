
<ol>
<?php for ($i=10; $i >3 ; $i--) :?>

	<?php 
		if ($i==7){
			continue;
		}
	?>
<?php	echo "List item number"." ".$i."<br/>";?>


<?php endfor?>	
</ol>

<ul>
<?php for ($i=10; $i >0 ; $i--) :?>
	<?php if($i<3) break;?>
	<?php if($i==7) continue; ?>

	<li>List item nr. <?php echo $i;?></li>

	<?php endfor; ?>
</ul>