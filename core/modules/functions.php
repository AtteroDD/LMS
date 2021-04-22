<?php

function debug($array) {
	echo '<pre>'.print_r($array, true).'</pre>';
}

function config($param) {
	return \core\structure\Config::get($param);
}

function addStyle($link) {
	return \core\structure\Document::addStyle($link);
}

function addScript($link) {
	return \core\structure\Document::addScript($link);
}

function addImage($link) {
	return \core\structure\Document::addImage($link);
}