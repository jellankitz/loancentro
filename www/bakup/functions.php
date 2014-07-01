<?php 
session_start();
$url = "http://loancentro.com/1";
if (!empty($_SERVER['HTTPS'])) {
	$url = "https://loancentro.com/1";
}

?>