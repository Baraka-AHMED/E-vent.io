<?php
$pdo = new PDO('mysql:dbname=; host=localhost', 'login', 'mdp');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
?>