<?php 
session_start();

session_unset();

session_destroy();

echo 'Déconnecté';

header("location: IDAW/TP3/exercice 1/index.php");

?>