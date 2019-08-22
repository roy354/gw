<?php
require 'class.php'; // Memanggil class.php

$user = "royhul255";
$pass = "ibuku354";
while (1) {

	$baru = new social("https://www.askdaraz.com");

	$baru->login($user, $pass);
	$baru->like = 0;
	$day = 60 * 60 * 24;
	$time_awal = round(microtime("a"));
	$baru->react = 1;
	for ($i = 78308; $i > 1; $i--) {
		$baru->react($i);
	}
	$akhir = round(microtime("a")) - $time_awal;
	$sleep = $day - $akhir;

	$baru->logout();
	sleep($sleep);
}
?>