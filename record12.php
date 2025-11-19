<html>
<body>
<?php
$students=array("Nayyira","Amitha","Neflu","Shaikha","Dhrishya");
echo "Orginal Array:<br>";
print_r($students);
asort($students);
echo"<br><br>Ascending order(asort):<br>";
print_r($students);
arsort($students);
echo"<br><br>Descending order(arsort):<br>";
print_r($students);
?>
</body>
</html>

