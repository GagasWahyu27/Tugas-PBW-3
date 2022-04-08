<?php
//no 3
function hari(){
	$hari = $_POST['notiga'];
	switch($hari){
		case '1':
			$hari = "Minggu";
		break;

		case '2':			
			$hari = "Senin";
		break;
 
		case '3':
			$hari = "Selasa";
		break;
 
		case '4':
			$hari = "Rabu";
		break;
 
		case '5':
			$hari = "Kamis";
		break;
 
		case '6':
			$hari = "Jumat";
		break;
 
		case '7':
			$hari = "Sabtu";
		break;
		
		default:
			$hari = "Tidak di ketahui";		
		break;
	}
	return $hari ;
}
echo "Hari ini adalah ". hari(). "<br>";
?>