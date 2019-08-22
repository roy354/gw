<?php
$proxy = "70.102.86.204:8080";
$email = "rezultroy3q@gmail.com";
$pass = "ibuku354";
$user = "royhul2531sq";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.askdaraz.com/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_PROXY, $proxy);
//curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Connection: keep-alive';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Dnt: 1';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
$headers[] = 'Sec-Fetch-Site: none';
//$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
curl_setopt($ch, CURLOPT_COOKIEJAR, "2");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}else
{
	echo "Ambil Cookie\n";
}
curl_close($ch);





$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.askdaraz.com/requests.php?f=register');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "username=$user&email=$email&password=ibuku354&confirm_password=ibuku354&gender=male&accept_terms=on");
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_PROXY, $proxy);
$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Referer: https://www.askdaraz.com/register';
$headers[] = 'Dnt: 1';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_COOKIEFILE, "2");
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}else
{
	$json = json_decode($result, 1);
	if (isset($json['status']) && $json['status'] == "200") {

		echo "Akun Berhasil Dibuat\n";
		fwrite(fopen("akun.txt", "a"), "$user|$pass\n");
	}else
	{
		echo $result;
		echo "Akun Gagal Dibuat\n";
	}
}
curl_close($ch);


?>