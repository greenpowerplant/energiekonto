<?php
require_once 'menu.php';
require_once 'header.php';
require_once 'script.php';
?>



	<div class="container">
    	<h1 class="page-header"> Verbrauchsdaten </h1>

<hr>


<!--einfache Datumsauswahl-->

von <input type ="text" id="datepicker">
<br>
bis <input type ="text" id="datepicker2">
                   
<script>
$(function(){
$("#datepicker").datepicker();
});
</script>

<script>
$(function(){
$("#datepicker2").datepicker();
});
</script>

     
     <script src="js/jquery-ui.min.js"></script>
         <script src="js/bootstrap.min.js"></script>

