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

    foreach ($result_ar as $key => $value) {
        if ($value === '') {
            $result_ar[$key] = "";
        };
        // echo "<p>$value</p>";
    };

    $year = $result_ar['YEAR'];
    $make = $result_ar['Make'];
    $model = $result_ar['Model'];
    $trim = $result_ar['TRIM'];
    $exterior = $result_ar['EXT_COLOR'];
    $interior = $result_ar['INT_COLOR'];
    $mileage = $result_ar['MILEAGE'];
    $transmission = $result_ar['TRANSMISSION'];
    $price = $result_ar['ASKING_PRICE'];



    echo "<h1>input the car detail in the form below</h1>";
    echo "<form action='updatecar.php' method='post'>";
    echo "<input name='VIN' type='text' minlength='17' maxlength='17' value={$vin} hidden /><br />";
    echo "YEAR: <input name='YEAR' type='text' minlength='4' maxlength='4' value={$year} /><br />";
    echo "Make: <input name='Make' type='text' value={$make} /><br/>";
    echo "Model: <input name='Model' type='text' value={$model} /><br/>";
    echo "TRIM: <input name='TRIM' type='text' value={$trim} /><br/>";
    echo "EXT_COLOR: <input name='EXT_COLOR' type='text' value={$exterior} /><br/>";
    echo "INT_COLOR: <input name='INT_COLOR' type='text' value={$interior} /><br/>";
    echo "ASKING_PRICE: <input name='ASKING_PRICE' type='text' value={$price} /><br/>";
    echo "MILEAGE: <input name='MILEAGE' type='text' value={$mileage} /><br/>";
    echo "TRANSMISSION: <input name='TRANSMISSION' type='text' value={$transmission} /><br/>";
    echo "<button>Update the data</button>";
    echo "</form>";
    $mysqli->close();
    ?>
</body>

</html>