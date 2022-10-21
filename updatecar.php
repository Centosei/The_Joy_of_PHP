<!DOCTYPE html>
<html>

<head>
    <title>car saved</title>
</head>

<body>
    <?php
    // OOP
    $mysqli = new mysqli("localhost", "root", "", "Cars");

    $key_value = "";
    foreach ($_POST as $key => $value) {
        if (($value === "/") | ($value === "")) {
            $key_value = $key_value . "$key = null, ";
        } elseif (is_numeric($value)) {
            $key_value = $key_value . "$key = $value, ";
        } else {
            $key_value = $key_value . "$key = '$value', ";
        }
    }

    $key_value = substr($key_value, 0, -2);

    // capturing the values submitted from the form
    $VIN = $mysqli->real_escape_string($_POST['VIN']);
    $year = $mysqli->real_escape_string($_POST['YEAR']);
    $Make = $mysqli->real_escape_string($_POST['Make']);
    $Model = $mysqli->real_escape_string($_POST['Model']);
    $trim = $mysqli->real_escape_string($_POST['TRIM']);
    $exterior = $mysqli->real_escape_string($_POST['EXT_COLOR']);
    $interior = $mysqli->real_escape_string($_POST['INT_COLOR']);
    $mileage = $mysqli->real_escape_string($_POST['MILEAGE']);
    $transmission = $mysqli->real_escape_string($_POST['TRANSMISSION']);
    $Price = $mysqli->real_escape_string($_POST['ASKING_PRICE']);

    // build SQL query
    $query = "UPDATE INVENTORY SET " . $key_value . " WHERE " . "INVENTORY.VIN = '$VIN';";

    // print $query
    echo "<p>$query</p>";

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
    echo "Connection established successfully";

    // Perform query
    if ($result = $mysqli->query($query)) {
        echo "<p>You have successfully updated $Make $Model into the database.</p>";
        $url = "Location: http://192.168.64.2/The_Joy_of_PHP/editcars.php?success=true";
    } else {
        echo "Error updating $VIN into the database: " . mysqli_error($mysqli) . "<br/>";
        $url = "Location: http://192.168.64.2/The_Joy_of_PHP/editcars.php?success=false";
    }

    $mysqli->close();

    // redirect to the editcars page
    header($url);
    exit();
    ?>
</body>

</html>