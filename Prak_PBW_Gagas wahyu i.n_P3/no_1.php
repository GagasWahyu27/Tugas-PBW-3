<?php
//no 1
$huruf = $_POST['nosatu'];
if (($huruf == "A") || ($huruf == "I") || ($huruf == "U") || ($huruf == "E") ||
($huruf == "O") || ($huruf == "a") || ($huruf == "i") || ($huruf == "u") || ($huruf == "e") ||
($huruf == "o"))
{
echo "$huruf Termasuk huruf vokal"."<br>";
}
else
{
echo "$huruf Tidak termasuk huruf vokal"."<br>";
}
?>