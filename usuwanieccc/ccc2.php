<?php
$jj=$_GET["vvv"];
//$gg=$_GET["rr"];
echo("To jest wartosc zmiennej: ".$jj." <br>");
$con = mysqli_connect("127.0.0.1","root","","lysy");
$q2 = "DELETE FROM `pracownicy` WHERE id='$jj'";
//$con->query($q2);
mysqli_query($con, $q2);
$q1 = "SELECT * FROM `pracownicy`";
if($wynik1=$con->query($q1))
while($row1=$wynik1->fetch_array())
echo $row1["id"]." ".$row1["imie"].";<br>";
?>