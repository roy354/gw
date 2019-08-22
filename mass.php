<?php
/*

Jangan dibuat jika tidak mau eror
coded by roy
 */

while (1) {
	$data = file_get_contents("akun.txt");
	$pisah = array_filter(explode("\n", $data));
	foreach ($pisah as $kunci) {
		$pisah_1 = explode("|", $kunci);
		$user = $pisah_1[0];
		$pass = $pisah_1[1];
		popen("php asli.php $user $pass", "w");
	}
	
while (1) {
	if ($tanggal_sekarang != date("d")) {
		break;
	}
}
}

?>