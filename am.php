<?php
function cari($w) {

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'https://www.askdaraz.com/requests.php?hash=ffafff12cf5a0c4741eb&f=posts&s=load_more_posts&filter_by_more=all&after_post_id=' . $w . '&user_id=0&page_id=0&group_id=0&event_id=0&posts_count=44&is_api=0&ad_id=0&story_id=0&_=1566014392392');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

	curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

	$headers = array();
	$headers[] = 'Sec-Fetch-Mode: cors';
	$headers[] = 'Sec-Fetch-Site: same-origin';
	$headers[] = 'Dnt: 1';
	$headers[] = 'Accept-Encoding: gzip, deflate, br';
	$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
	$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36';
	$headers[] = 'Accept: */*';
	$headers[] = 'Referer: https://www.askdaraz.com/';
	$headers[] = 'X-Requested-With: XMLHttpRequest';
	$headers[] = 'Cookie: PHPSESSID=9c5533818850e396ead7a32124e1eb7c; ad-con=a%3A2%3A%7Bs%3A4%3A%26quot%3Bdate%26quot%3B%3Bs%3A10%3A%26quot%3B2019-08-17%26quot%3B%3Bs%3A3%3A%26quot%3Bads%26quot%3B%3Ba%3A0%3A%7B%7D%7D; mode=day; access=1; src=1; _ga=GA1.2.678681759.1566007377; _gid=GA1.2.1444705649.1566007377; post_privacy=0; cookieconsent_status=dismiss; user_id=c8bdf7bc82e84e329891d85ede2e37215c645af21aa1d5e1ac61303fa1aad890d545ab4f38476451e3019767b1b23f82883c9850356b71d6; last_sidebar_update=1566014388; _us=1566101057';
	$headers[] = 'Connection: keep-alive';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);
	if (curl_errno($ch)) {
		echo 'Error:' . curl_error($ch);
	} else {
		//echo $result;
	}
	curl_close($ch);
	preg_match_all('/<button type="button" class="btn btn-main" id="edit-post-button" onclick="Wo_EditPost\(\d{1,10}\)" >/', $result, $hasil);
	$data = str_replace(array('<button type="button" class="btn btn-main" id="edit-post-button" onclick="Wo_EditPost(', '" >', ')'), "", $hasil[0][0]);
	return $data;
}
$angkah = 108160;
for ($i=0; $i < 1000; $i++) { 
	
	fwrite(fopen("hasil.txtx", "a"), cari($angkah)."\n");
	$angkah = cari($angkah);
	echo $angkah."\n";
}
?>