$url = 'https://www.youtube.com/watch?v=HKCingxCiuQ';

	 if(strstr($url, "youtube")) { 

parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
$bilgi = '<iframe src="//api.listenvid.com/?default/'.$my_array_of_vars['v'].'/mp3/white" width="100%" height="100px" scrolling="no" style="border:none;">';
}
echo $bilgi;
