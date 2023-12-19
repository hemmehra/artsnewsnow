<?php
/*

**  Template Name: Instagram

*/

get_header(); ?>


<?php

$client = new http\Client;
$request = new http\Client\Request;




$link = 'https://graph.facebook.com/v15.0/{ig-media-id}?fields={fields}&access_token={access-token}'







$request->setRequestUrl('https://instagram-data1.p.rapidapi.com/hashtag/feed');
$request->setRequestMethod('GET');
$request->setQuery(new http\QueryString([
	'hashtag' => 'summer'
]));

$request->setHeaders([
	'X-RapidAPI-Key' => 'SIGN-UP-FOR-KEY',
	'X-RapidAPI-Host' => 'instagram-data1.p.rapidapi.com'
]);

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();



<?php get_footer();

