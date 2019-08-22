<?php

$awal = round(microtime("a"));
for ($i=0; $i < 10000; $i++) { 
	echo "$i\n";
	if ($i == "1000") {
		sleep("3");
	}
}
$akhir = round(microtime("a"));
$akhir = $akhir-$awal;
echo $akhir;
//round(number, precision, mode)
?>