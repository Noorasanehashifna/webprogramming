<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
    <style>
        body { font-family: Arial; }
        form { width: 300px; margin: auto; }
        input { width: 100%; padding: 10px; margin: 10px 0; }
        .result { margin-top: 20px; font-size: 20px; text-align: center; }
    </style>
</head>
<body>

<h2 style="text-align:center;">Electricity Bill Calculator</h2>

<form method="post">
    <label>User Name:</label>
    <input type="text" name="username" required>

    <label>Enter Units Consumed:</label>
    <input type="number" name="units" required>

    <input type="submit" value="Calculate Bill">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = htmlspecialchars($_POST["username"]);
    $units = $_POST["units"];
    $bill = 0;

    // Bill calculation
    if ($units <= 100) {
        $bill = $units * 5;
    } elseif ($units <= 300) {
        $bill = (100 * 5) + (($units - 100) * 7);
    } else {
        $bill = (100 * 5) + (200 * 7) + (($units - 300) * 10);
    }

    echo "<div class='result'>
            Hello <strong>$username</strong>!<br>
            Your total electricity bill is:<br>
            <strong>₹$bill</strong>
          </div>";
}
?>

</body>
</html>

