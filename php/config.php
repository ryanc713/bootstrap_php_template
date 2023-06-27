<?php
$host = 'DATABASE HOST';
$dbname = 'DATABASE NAME';
$username = 'DATABASE USERNAME';
$password = 'DATABASE USER PASSWORD';

try {
	$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully";
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>
