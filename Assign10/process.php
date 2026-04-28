<!DOCTYPE html>
<html>
<body>

<h2>Submitted Data</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "<table border='1'>
    <tr><th>Name</th><th>Email</th></tr>
    <tr><td>$name</td><td>$email</td></tr>
    </table>";

} else {
    echo "Please submit the form first.";
}
?>

</body>
</html>
