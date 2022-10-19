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
    $query = "DELETE FROM INVENTORY WHERE VIN='$vin'";
    if ($result = $mysqli->query($query)) {
        echo "You successfully deleted from the database<br/>";
    } else {
        echo "Error deleting the selected car from the database: " . mysqli_error($mysqli) . "<br/>";
    }
    $mysqli->close();
    ?>
</body>

</html>