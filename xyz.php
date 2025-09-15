<?php
//Przykładowa składnia połączenia z bazą danych dla PHP i MySQL.
 
//Łączenie z bazą danych
 
$con=mysqli_connect("localhost","root", "", "napoje");
 
 
# Sprawdź, czy dany rekord istnieje
 
$query = "SELECT * FROM picie";
 
$result = mysqli_query($con, $query);
 
 
while($row = mysqli_fetch_array($result)){
echo( $row["nazwa"]." ".$row["pojemnosc"]."<br>");;
 
}
mysqli_close($con);
?>