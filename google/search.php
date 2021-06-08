{\rtf1\ansi\ansicpg1250\cocoartf1671\cocoasubrtf600
{\fonttbl\f0\fnil\fcharset0 HelveticaNeue;}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;\red242\green242\blue242;}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0;\cssrgb\c96078\c96078\c96078;}
\paperw11900\paperh16840\margl1440\margr1440\vieww12200\viewh15720\viewkind1
\deftab720
\pard\pardeftab720\sl360\partightenfactor0

\f0\fs30 \cf2 \cb3 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 <?php\
$nazwa= file_get_contents('./cities.json');\
$url_data=$_GET;\
$look_up=$url_data['name'];\
#var_dump($look_up);\
$tablica_JSON=json_decode($nazwa, true);\
$wynik=[];\
foreach ($tablica_JSON as $city) \{\
	$name=$city['name'];\
	$ok = stripos($name, $look_up);	\
	if ($ok !== false) \{\
		array_push($wynik, $city);\
		if(count($wynik)==10\{\
			break;\
		\}\
	\}\
\}\
echo json_encode($wynik);\
?>}