<!DOCTYPE html>
<html>

<head>
    <title>view cars</title>
    <style>
        table {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Sam's Used Cars</h1>
    <?php
    include 'db.php';
    $vin = $_GET['VIN'];
    $query = "SELECT * FROM INVENTORY WHERE VIN='$vin'";
    if ($result = $mysqli->query($query)) {
        // no need to do anything when succeeded
    } else {
        echo "Error getting the car from the database: " . mysqli_error($mysqli) . "<br/>";
    }

    $result_ar = $result->fetch_assoc();
    $year = $result_ar['YEAR'];
    $make = $result_ar['Make'];
    $model = $result_ar['Model'];
    $trim = $result_ar['TRIM'];
    $exterior = $result_ar['EXT_COLOR'];
    $interior = $result_ar['INT_COLOR'];
    $mileage = $result_ar['MILEAGE'];
    $transmission = $result_ar['TRANSMISSION'];
    $price = $result_ar['ASKING_PRICE'];

    echo "<p>$year $make $model</p>";
    echo "<p>Asking Price: $price</p>";
    echo "<p>Exterior Color: $exterior</p>";
    echo "<p>Interior Color: $interior</p>";
    $mysqli->close();
    ?>
</body>

</html>