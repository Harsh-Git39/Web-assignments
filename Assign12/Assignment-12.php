<!DOCTYPE html>
<html>
<body>

<h2>Student List</h2>

<?php
$students = array("Harsh", "Amit", "Rahul");

echo "<table border='1'>
<tr><th>Names</th></tr>";

foreach($students as $s) {
    echo "<tr><td>$s</td></tr>";
}

echo "</table>";
?>

</body>
</html>