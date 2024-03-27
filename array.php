<?php

$array = '
            [{
                "id": 2264,
                "code": "002283",
                "name": "QUIZÁS PARA SIEMPRE   (HD) (DOB)",
                "image": "https://cinestar-files.obs.la-south-2.myhuaweicloud.com/external-qa/movies/1676500265.jpg",
                "url_trailer": "https://youtu.be/7KDPLXD",
                "summary": "Lorem ipsum dolor sit amet.",
                "duration_in_minutes": 90,
                "type_of_censorship": "Mayores de 14",
                "premier_date": "2001-06-23",
                "gender_id": 1,
                "country_id": 1,
                "full_capacity": false
            },
            {
                "id": 2019,
                "code": "002030",
                "name": "DESPERTAR DE LA FURIA 7676(HD)(DOB)",
                "image": "https://cinestar-files.obs.la-south-2.myhuaweicloud.com/external-qa/movies/1643312368.jpg",
                "url_trailer": "https://www.youtube.com/watch?v=DI3gW94_uFc",
                "summary": "sinopsis",
                "duration_in_minutes": 120,
                "type_of_censorship": "Mayores de 14",
                "premier_date": "2022-01-13",
                "gender_id": 1,
                "country_id": 1,
                "full_capacity": false
            },
            {
                "id": 2018,
                "code": "002029",
                "name": "PINOCHO 1010      (HD) (DOB)",
                "image": "https://cinestar-files.obs.la-south-2.myhuaweicloud.com/external-qa/movies/1643312316.jpg",
                "url_trailer": "https://www.youtube.com/watch?v=DI3gW94_uFc",
                "summary": "sinopsis",
                "duration_in_minutes": 125,
                "type_of_censorship": "Todo espectador",
                "premier_date": "2022-01-20",
                "gender_id": 2,
                "country_id": 2,
                "full_capacity": false
            },
            {
                "id": 2040,
                "code": "002051",
                "name": "BATMAN    (HD) (DOB)",
                "image": "https://cinestar-files.obs.la-south-2.myhuaweicloud.com/external-qa/movies/1648053811.jpg",
                "url_trailer": "https://www.youtube.com/watch?v=DI3gW94_uFc",
                "summary": "nueva pelicula",
                "duration_in_minutes": 175,
                "type_of_censorship": "Mayores de 14",
                "premier_date": "2022-03-02",
                "gender_id": 2,
                "country_id": 3,
                "full_capacity": false
            }]
		';
	
$movies = json_decode($array, true);

var_dump($movies);
echo "<br><br>";
$desiredIds = [2040, 2264];
$foundKeys = [];

foreach ($movies as $key => $movie) {
    if (in_array($movie['id'], $desiredIds)) {
        $foundKeys[] = $key;
    }
}

foreach ($foundKeys as $key) {
    unset($movies[$key]);
}

$movies = array_values($movies); // Reset array keys

if (!empty($foundKeys)) {
    echo "Movies with IDs " . implode(', ', $foundKeys) . " were found and deleted.";
} else {
    echo "No movies with the specified IDs were found.";
}

// If you want to convert the modified array back to JSON:
var_dump($movies);
$json = json_encode($movies, JSON_PRETTY_PRINT);
echo $json;

?>