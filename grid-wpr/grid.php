<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
</head>
<body>
    <div id="main">
<?php
$con = mysqli_connect("localhost", "root", "", "redshirt");
$query = "SELECT * FROM uczen";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result)){
    echo("<div>".$row["id"]." ".$row["Nazwisko"]." ".$row["Imie"]." ".$row["Srednia_ocen"]." ".$row["id_klasy"]."</div>");;
}
mysqli_close($con);
?>
    </div>
</body>
</html>