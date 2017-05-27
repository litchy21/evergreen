<?php
session_start();

$host 	= 'db683466670.db.1and1.com';
$dbname = 'db683466670';
$user 	= 'dbo683466670';
$pass 	= 'Pomme.de.pin889134';

$db = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

function getBDD()
{
	global $db;
	return $db;
}

?>