<head>
    <link rel="stylesheet" href="aaa.css">
</head>
<table>
<?php
$con = mysqli_connect("127.0.0.1", "root", "", "napoje");
$q1 = "SELECT * FROM `picie`";
if($wynik1 = $con->query($q1))
while($row1 = $wynik1->fetch_array())
echo "<tr><td>".$row1["id"]."</td><td>".$row1["nazwa"]."</td><td>".$row1["pojemnosc"]."</td></tr>"
?>
</table>