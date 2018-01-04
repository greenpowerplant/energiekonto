<?php
require_once 'menu.php';
require_once 'header.php';
require_once 'script.php';
?>

	<div class="container">
    	<h1 class="page-header"> Dateneingabe </h1>

<hr>

<!--Formular zur Dateneingabe mit Toggle Funktion-->

<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("fast");
    });
});
</script>

<style> 
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
}

#panel {
    padding: 50px;
    display: none;
    

}
</style>
</head>
<body>
 
<div id="flip">Kuehlgeraete</div>
<div id="panel">
    
    <form action="senden.html" id="person">
    <label for="k1">Kuehlschrank</label> 
    <input type="text" name="vorname" id="vorname" maxlength="30">
    <br>
    <label for="k2">Gefrierschrank</label> 
    <input type="text" name="vorname" id="vorname" maxlength="30">
    <br>
    <label for="k3">Gefrierkombi</label> 
    <input type="text" name="vorname" id="vorname" maxlength="30">
</form>
</div>


<div>
    
 <form action="senden.html" id="person">
    <label for="mikro">Mikrowelle</label> 
    <input type="text" text-align="center" name="vorname" id="vorname" maxlength="30">
</form>
</div>


</body>

    




