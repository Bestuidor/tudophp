
<?php
require "layout.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero1 =$_POST["numero1"];
     $numero2 =$_POST["numero2"];

     echo"numero1:".$numero1."<br>";
     echo"numero2:".$numero2."<br>";
    $resultado= $numero1 + $numero2;


?>
<form method="POST">
<label for="null">numero 1</label>
<input type="number" name="numero1" id="numero1" required autofocus>
<br><br>
<label for="null">numero 2 </label>
<input type="number" name="numero2" id="numero2" required autofocus>
<br><br>
<input type="submit" value="salvar">


</form>