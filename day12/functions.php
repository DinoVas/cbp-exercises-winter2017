<?php
function get_current_year()
{
    return date('Y');
}



function print_current_year()
{
	 echo get_current_year('Y');
}



function print_temperature_far(temp)
{
		$fartemp= ((9/5)*temp)+32;
		echo "The temperature in fahrenheit is".$fartemp;
}
?>