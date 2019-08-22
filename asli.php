<?php
require 'class.php';
$user = $argv[1];
$pass = $argv[2];

// Loop Endless
$baru = new social();
$baru->login($user, $pass);
$get = $baru->get_primary(); // dapat id postingan baru
for ($i = 0; $i < 1500; $i++) {
	$baru->react($get);
	sleep(1);
	$id = $baru->cari($get);
	$get = $id;
}
$tanggal_sekarang = date("d");
$baru->logout();

?>