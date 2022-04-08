<?php
//no. 4
$mobil1 = array("toyota","mitsubishi","tesla","honda");
$mobil2 = array ("satu"=>"toyota", "dua"=>"mitsubishi", "tiga"=>"tesla", "empat" =>"honda");

//a.
echo "Bagian a". "<br><br>";
$i = 0;
    for($i=0;$i<=3;$i++)
    {
        echo $mobil1[$i] . "<br>";
    }

echo "<br><br>"; 

$i = 0;
    while($i<=3)
    {
        echo "$mobil1[$i] <br>";
        $i++;
    }

echo "<br><br><br>"; 

echo "Bagian b". "<br><br>"; 
//b.
    foreach($mobil2 as $key=>$value)
    {
        echo $key . " : " . $value . "<br>";
    }
?>