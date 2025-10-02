<?php
$get_id = $_GET['id'];
$get_kl = $_GET['klasa'];
$con = mysqli_connect("localhost", "root", "", "redshirt");
$add = "INSERT INTO `klasa`(`id`, `nazwa`) VALUES ('$get_id', '$get_kl')";
$result = $con->query($add);
echo "Do bazy klasa doano klase $get_kl. <br>";
?>