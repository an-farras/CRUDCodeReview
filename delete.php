<?php

include 'functions.php';
$pdo = pdo_connect();
session_start();
if (!isset($_SESSION['user'])) {
    header("location: login.php");
} else {
	if (isset($_GET['id'])) {
    	$stmt = $pdo->prepare('DELETE FROM contacts WHERE id = ?');
    	$stmt->execute([$_GET['id']]);
    	header("location:index.php");
	} else {
    	die ('No ID specified!');
	}
}

?>