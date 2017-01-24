<?php
	
	$first_name='Konstantinos';
	$surname='Vassos';
	$year_of_birth='9.01.1998';
	$height="1,88m";

	echo "First Name:".$first_name."<br/>"; 
	echo "Surname:".$surname." "."<br/>";
	echo "Year of Birth:".$year_of_birth."<br/>";
	echo "Height:".$height."<br/> ";

	if (10>5) {
		# code...
		echo "10 wins.";
	}

	define('MY_OS', 'Windows 10');

	$i=1;

	while ( $i<= 10) {
		# code...
		echo $i;
		$i++;
	}

	echo MY_OS;
	function print_temperature_far($temp)
{
		$fartemp= ((9/5)*$temp)+32;
		echo "The temperature in fahrenheit is".$fartemp;
}

print_temperature_far(10);
$male=true;

echo ($male==true ? 'male' : 'female'); // checks if male is true and then prints the first value, 
										// if not it prints the second value (female)

if($male==true)
{
	echo "male";
}
else
{
	echo "female";
}
$number=10;
echo ($number%2==0 ? 'even' : 'odd');  // checks if the number given is even or odd


//exercise if


$height=150;

if ($height>180) {
	echo "tall";
	} elseif ($height<180 && $height>160) {
		echo"average";# code...
	} else {
		echo "small";
	}

$os="Windows";
switch ($os) {
	case 'Windows':
		echo "Edge for".$os;
		break;
	case 'Linux':
		echo "Firefox for".$os;
		break;
		case 'OS X':
		echo "Safari for".$os;
		break;
	default:
		echo"use chrome man";
		break;
}

$age=67;
$gender="Woman";
$employed=true;

if ($age>35) {
	echo"you are old";# code...
}
else
{
	echo "hello";
}


if ($age>=60 && $employed=true && $gender="Woman") {
	echo "bingo";
}
	else
	{
		echo "not bingo";
	}