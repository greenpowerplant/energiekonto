<?php
session_start();
require_once 'menu.php';
require_once 'header.php';
require_once 'script.php';
?>

	<div class="container">
    	<h1 class="page-header"> Benutzerverwaltung </h1>

<hr>

<html>
    Hallo User XY <br>
    Willst du dein Konto wirklich löschen?<br>
<input type="checkbox" name="Löschen" value="ON" disabled="false" />
</html>

<br>

<!-- Sessionausgabe-->

<?php
echo $_SESSION['test'];
?>


    




