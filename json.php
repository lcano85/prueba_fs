<?php

$json = '
{"status":200,"data":[{"id":2264,"code":"002283","name":"QUIZ\u00c1S PARA SIEMPRE   (HD) (DOB)","image":"https:\/\/cinestar-files.obs.la-south-2.myhuaweicloud.com\/external-qa\/movies\/1676500265.jpg","url_trailer":"https:\/\/youtu.be\/7KDPLXD","summary":"Lorem ipsum dolor sit amet, consectetur.","duration_in_minutes":90,"type_of_censorship":"Mayores de 14","premier_date":"2001-06-23","gender_id":1,"gender_name":"Acci\u00f3n","country_id":1,"country_name":"India"},{"id":2019,"code":"002030","name":"DESPERTAR DE LA FURIA 0909(HD)(DOB)","image":"https:\/\/cinestar-files.obs.la-south-2.myhuaweicloud.com\/external-qa\/movies\/1643312368.jpg","url_trailer":"https:\/\/www.youtube.com\/watch?v=DI3gW94_uFc","summary":"sinopsis","duration_in_minutes":120,"type_of_censorship":"Mayores de 14","premier_date":"2022-01-13","gender_id":1,"gender_name":"Acci\u00f3n","country_id":1,"country_name":"India"},{"id":2018,"code":"002029","name":"PINOCHO          (HD) (DOB)","image":"https:\/\/cinestar-files.obs.la-south-2.myhuaweicloud.com\/external-qa\/movies\/1643312316.jpg","url_trailer":"https:\/\/www.youtube.com\/watch?v=DI3gW94_uFc","summary":"sinopsis","duration_in_minutes":125,"type_of_censorship":"Todo espectador","premier_date":"2022-01-20","gender_id":2,"gender_name":"Ciencia ficci\u00f3n","country_id":2,"country_name":"China"},{"id":2040,"code":"002051","name":"BATMAN    (HD) (DOB)","image":"https:\/\/cinestar-files.obs.la-south-2.myhuaweicloud.com\/external-qa\/movies\/1648053811.jpg","url_trailer":"https:\/\/www.youtube.com\/watch?v=DI3gW94_uFc","summary":"nueva pelicula","duration_in_minutes":175,"type_of_censorship":"Mayores de 14","premier_date":"2022-03-02","gender_id":2,"gender_name":"Ciencia ficci\u00f3n","country_id":3,"country_name":"Estados Unidos"},{"id":2041,"code":"002052","name":"OPERACI\u00d3N FOCAS AL ATAQUE (HD) (DOB)","image":"https:\/\/cinestar-files.obs.la-south-2.myhuaweicloud.com\/external-qa\/movies\/1649884402.jpg","url_trailer":"https:\/\/www.youtube.com\/watch?v=dFF-rPmjbJo","summary":"nueva pelicula","duration_in_minutes":98,"type_of_censorship":"Todo espectador","premier_date":"2022-01-27","gender_id":1,"gender_name":"Acci\u00f3n","country_id":6,"country_name":"Espa\u00f1a"}]}
';

//var_dump($json);
$array = explode(',"', $json);
//var_dump($array);
$data= json_decode( json_encode($json), true);
//echo $data[0];
$datos =json_decode($json);
$valor1 = json_encode($json);
//echo $valor1;
//var_dump($valor1);

$valor2 = json_decode($valor1, true);
//var_dump($valor2);
//echo $valor2->data;
//echo $datos->data;

json_encode($datos->data);
$json = json_encode($datos->data);
 //var_dump($json);
//var_dump(json_encode($datos->data));

//var_dump($datos->data);

$json1 = '{"id":2264,"code":"009983","name":"QUIZ\u00c1S PARA SIEMPRE   (HD) (DOB)","image":"https:\/\/cinestar-files.obs.la-south-2.myhuaweicloud.com\/external-qa\/movies\/1676500265.jpg","url_trailer":"https:\/\/youtu.be\/7KDPLXD","summary":"Lorem ipsum dolor sit amet, consectetur.","duration_in_minutes":90,"type_of_censorship":"Mayores de 14","premier_date":"2001-06-23","gender_id":1,"gender_name":"Acci\u00f3n","country_id":1,"country_name":"India"}';

//var_dump($json1);

//echo "<br><br>";
$json2 = [json_decode($json1, true)];

//var_dump($json2);

$url = "http://cinestar-external-api.test/api/v1/mongomovies";    
$content = json_encode($json2);

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER,
        array("Content-type: application/json"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

$json_response = curl_exec($curl);

$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

if ( $status != 201 ) {
    die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
}


curl_close($curl);

$response = json_decode($json_response, true);

var_dump($response);



?>