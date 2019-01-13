<?php

session_start();

require_once "Facebook/autoload.php";

$facebook = new \Facebook\Facebook([
	'app_id' => '175824203121129',
	'app_secret' => '267cc5fbce96c55f7adde9b6d004503a',
	'default_graph_version' => 'v2.10'
]);

$helper = $facebook->getRedirectLoginHelper();

