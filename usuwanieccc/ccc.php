<form method='GET' action='ccc2.php'>
<select name="vvv">
<?php
$con = mysqli_connect("127.0.0.1", "root", "", "lysy");
$q1 = "SELECT * FROM `pracownicy`";
if($wynik1=$con->query($q1))
while($row1=$wynik1->fetch_array())
echo "<option value='".$row1["id"]."'>".$row1["imie"]."</option>";
?>
</select>
<input type='submit' value='wyslij'>

<?php
$con = new mysqli("127.0.0.1","root","","lysy");
$q1 = "SELECT * FROM `pracownicy`";
if($wynik1=$con->query($q1))
while($row1=$wynik1->fetch_array())
echo $row1["id"]."<br>";
?>
</form>