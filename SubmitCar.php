<!DOCTYPE html>
<html>

<head>
    <title>car saved</title>
</head>

<body>
    <?php
    // OOP
    $mysqli = new mysqli("localhost", "root", "", "Cars");

    // capturing the values submitted from the form
    $VIN = $mysqli->real_escape_string($_POST['VIN']);
    $Make = $mysqli->real_escape_string($_POST['Make']);
    $Model = $mysqli->real_escape_string($_POST['Model']);
    $Price = $mysqli->real_escape_string($_POST['Asking_Price']);

    // build SQL query
    $query = "INSERT INTO `INVENTORY`
        (`VIN`, `Make`, `Model`, `ASKING_PRICE`)
        VALUES (
            '$VIN',
            '$Make',
            '$Model',
            $Price
        )";

    // print $query
    echo $query . "<br />";

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
    echo "Connection established successfully";

    // Perform query
    if ($result = $mysqli->query($query)) {
        echo "<p>You have successfully entered $Make $Model into the database.</p>";
    } else {
        echo "Error entering $VIN into the database: " . mysqli_error($mysqli) . "<br/>";
    }

    $mysqli->close();

    /* Procedural
    // make connection
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "Cars";
    $connection = mysqli_connect($server_name, $user_name, $password, $database);
    // check the connection
    if (!$connection) {
        die("Failed " . mysqli_connect_error());
    }
    echo "Connection established successfully<br/>";

    // execute the query
    if (mysqli_query($connection, $query)) {
        echo "$Make $Model is successfully registered into the database<br/>";
    } else {
        echo "Error:" . mysqli_error($connection);
    }

    // close the connection
    mysqli_close($connection);
    */
    ?>
</body>

</html>