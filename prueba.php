<?php

$string = '["id" => "2121","code" => "002127","is_3d" => "0","name" => "SEDUCTORES IRRESISTIBLES   (HD) (DOB)","image_path" => "1653062835.jpg","url_trailer" => "https://youtu.be/A18rQe1pW4w","summary" => "Pelu00edcula peruana que cuenta con las actuaciones de Jesu00fas Neyra, Josu00e9 Dammert, Hernu00e1n Romero, Vania Accinelli, entre otros talentosos actores y actrices nacionales","duration_in_minutes" => "95","type_of_censorship" => "Mayores de 14","premier_date" => "2022-06-09","movie_gender_id" => "3","movie_gender_name" => "Comedia","country_id" => "7","country_name" => "Peru00fa","movie_times" => [["headquarter_id" => "19","start_at" => "2022-06-09 15:30:00","date_start" => "2022-06-09","city_id" => "8"],["headquarter_id" => "19","start_at" => "2022-06-09 17:30:00","date_start" => "2022-06-09","city_id" => "8"],["headquarter_id" => "19","start_at" => "2022-06-09 19:30:00","date_start" => "2022-06-09","city_id" => "8"],["headquarter_id" => "19","start_at" => "2022-06-10 16:30:00","date_start" => "2022-06-10","city_id" => "8"],["headquarter_id" => "19","start_at" => "2022-06-11 16:30:00","date_start" => "2022-06-11","city_id" => "8"],["headquarter_id" => "19","start_at" => "2022-06-12 16:30:00","date_start" => "2022-06-12","city_id" => "8"],["headquarter_id" => "19","start_at" => "2022-06-13 16:30:00","date_start" => "2022-06-13","city_id" => "8"],["headquarter_id" => "19","start_at" => "2022-06-14 16:30:00","date_start" => "2022-06-14","city_id" => "8"],["headquarter_id" => "19","start_at" => "2022-06-15 16:30:00","date_start" => "2022-06-15","city_id" => "8"],["headquarter_id" => "2","start_at" => "2022-06-14 16:30:00","date_start" => "2022-06-15","city_id" => "8"]]';
//$array = eval($string);
//$json = json_encode($string);
/*$val = gettype($string);
var_dump($val);
$json = (array) $string;
$json2 = json_decode($string, true);
var_dump($json);
*/
$array = eval("return $string");
print_r($array);

?>