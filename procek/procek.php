<?php
$producent = $_GET['pro'];
$seria = $_GET['ser'];
$model = $_GET['mod'];
$data = $_GET['dat'];
$rok = $_GET['rok'];
$wybor = $_GET['wyb'];
echo("Producent: "."$producent"."<br>"."Seria: "."$seria"."<br>"."Model: "."$model"."<br>"."Dzien i miesiac wydania: "."$data"."<br>"."Rok wydania: "."$rok"."<br>"."Wybrany procesor: "."$wybor");
?>