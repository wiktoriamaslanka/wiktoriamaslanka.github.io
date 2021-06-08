<?php
$nazwa= file_get_contents('./cities.json');
$url_data=$_GET;
$look_up=$url_data['name'];
#var_dump($look_up);
$tablica_JSON=json_decode($nazwa, true);
$wynik=[];
foreach ($tablica_JSON as $city) {
	$name=$city['name'];
	$ok = stripos($name, $look_up);	
	if ($ok !== false) {
		array_push($wynik, $city);
		if(count($wynik)==10{
			break;
		}
	}
}
echo json_encode($wynik);
?>
