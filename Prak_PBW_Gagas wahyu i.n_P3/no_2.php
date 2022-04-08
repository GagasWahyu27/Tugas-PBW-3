<?php
//no 2
$input = $_POST['nodua'];

if($input < 0)
{
	echo "Bilangan $input adalah bilangan Negatif"."<br>";
}
	elseif($input > 0){
	echo "Bilangan $input adalah bilangan Positif"."<br>";
}
	else
{
	echo "Bilangan $input adalah netral"."<br>";
}
?>