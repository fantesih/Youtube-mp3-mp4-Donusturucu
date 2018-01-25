$url = 'https://www.youtube.com/watch?v=HKCingxCiuQ';

	 if(strstr($url, "youtube")) { 

parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
$bilgi = '<iframe class="button-api-frame" src="https://youtubemp3api.com/@api/button/videos/'.$my_array_of_vars['v'].'" width="100%" height="100%" allowtransparency="true" scrolling="no" style="border:none"></iframe>';
}
echo $bilgi;
