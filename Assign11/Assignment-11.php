<!DOCTYPE html>
<html>
<body>

<h2>String Operations</h2>

<?php
$str = "Harsh Dalvi";

echo "<table border='1'>
<tr><th>Operation</th><th>Result</th></tr>
<tr><td>Length</td><td>" . strlen($str) . "</td></tr>
<tr><td>Reverse</td><td>" . strrev($str) . "</td></tr>
<tr><td>Substring (0,5)</td><td>" . substr($str,0,5) . "</td></tr>
</table>";
?>

</body>
</html>