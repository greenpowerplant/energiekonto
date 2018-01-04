<?php
session_start();
require_once 'menu.php';
require_once 'header.php';
require_once 'script.php';
?>

	<div class="container">
    	<h1 class="page-header"> Login </h1>

<hr>



<div class= "container">
<form>
<div class= "form-group">
<input type= "text" class="form-control" placeholder= "Benutzername">
<input type= "password" class="form-control" placeholder= "Passwort">

</div>

</form>

    <div class= "container">
<input type = "submit" class = "btn btn-default" value = "Login">
</div>
    
    <br>
    

<!-- einfacher Test ob Sessions funktionieren -->
<?php
$_SESSION['test'] = "Jenny24";
?>

    
    




