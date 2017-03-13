<!-- <?php 
// $q=curl_init("https://graph.facebook.com/me/?access_token=EAAAACZAVC6ygBAJ71tYLsuk42FHBXn2XVjCE4RGzUmG7QUgBQdKyrV8Njrs9Fr4h9VOyZClsINPctb6URAZBIPo5OL9gHqGl10odGwEZBQZAtkiINiQiANjUswt2MOBLniZCb7dXRjiZAhys8zOXMhmlKHEGUg9LGMZD&expires_in=0");
// $op=[CURLOPT_RETURNTRANSFER=>TRUE, CURLOPT_SSL_VERIFYPEER=>FALSE];
// curl_setopt_array($q, $op); 
// $save=curl_exec($q); 
// curl_close($q); 
// print_r(json_decode($save, true));
?>
<! -->
<?php
$cu = curl_init();
$opt = array(CURLOPT_URL=>"http://igdb.com/", CURLOPT_RETURNTRANSFER=>true,CURLOPT_USERAGENT=>"Mozilla/5.0 (Windows NT 6.1; rv:50.0) Gecko/20100101 Firefox/50.0",CURLOPT_FOLLOWLOCATION=>true,CURLOPT_SSL_VERIFYPEER=>false);
curl_setopt_array($cu, $opt);
$result = curl_exec($cu);
$q=curl_error($cu) AND exit($q);
curl_close($cu);
$start = '<ul class="nav navbar-nav navbar-nav-header"><li>';
$end   = 'Contact</a></li></ul></li>';

$startPosisition = strpos($result, $start);
$endPosisition   = strpos($result, $end); 

$longText = $endPosisition - $startPosisition;

$out = substr($result, $startPosisition, $longText);
$dp_menu = explode("<li>", $out);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Grabbing Content of IGDB.com</title>
</head>
<body>
<ul>
	<li> <?php echo $dp_menu[1];?> </li>
	<li> <?php echo $dp_menu[2];?> </li>
	<li> <?php echo $dp_menu[3];?>
		<ul>
			<li> <?php echo $dp_menu[4];?> </li>
			<li> <?php echo $dp_menu[5];?> </li>
			<li> <?php echo $dp_menu[6];?> </li>
			<li> <?php echo $dp_menu[7];?> </li>
			<li> <?php echo $dp_menu[8];?> </li>
			<li> <?php echo $dp_menu[9];?> </li>
			<li> <?php echo $dp_menu[10];?> </li>
	</ul></li>
	<li> <?php echo $dp_menu[11];?> </li>
	<li> <?php echo $dp_menu[12];?> </li>
	<li> <?php echo $dp_menu[13];?> </li>
</ul>
</body>
</html>