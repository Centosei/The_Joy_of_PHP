<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>edit cars</title>
    <style>
        table {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Sam's Used Cars</h1>
    <?php
    // if ($_GET['success'] == true) {
    //     echo "<p>The data was successfully updated!!</p>";
    // };
    if (isset($_SESSION['success'])) {
        echo "<p>The data was successfully updated!!</p>";
        unset($_SESSION['success']);
    };
    ?>
    <h2>Choose an item you want to edit</h2>
    <?php
    include 'db.php';
    // $query
    $query = "SELECT * FROM INVENTORY ORDER BY Make";
    // Perform query
    if ($result = $mysqli->query($query)) {
        // no need to do anything when succeeded
    } else {
        echo "Error getting cars from the database: " . mysqli_error($mysqli) . "<br/>";
    }
    // create the table
    echo "<table id='Grid' style='width: 60%'><tr>";
    echo "<th style='width: 30px'>Make</th>";
    echo "<th style='width: 20px'>Model</th>";
    echo "<th style='width: 30px'>Asking Price</th>";
    echo "</tr>\n";

    $class = "odd";
    while ($result_ar = $result->fetch_assoc()) {
        echo "<tr class=\'$class\'>";
        echo "<td><a href='editcar.php?VIN=" . $result_ar['VIN'] . "'>" . $result_ar['Make'] . "</a></td>";
        echo "<td>" . $result_ar['Model'] . "</td>";
        echo "<td>" . $result_ar['ASKING_PRICE'] . "</td>";
        echo "</tr>\n";

        // odd & even switch
        if ($class == "odd") {
            $class = "even";
        } else {
            $class = "odd";
        }
    }

    echo "</table>";

    // close sql connection
    $mysqli->close();
    ?>
</body>

</html>