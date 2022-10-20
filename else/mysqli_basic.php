<?php
//specify the server name and here it is localhost
$server_name = "localhost";

//specify the username - here it is root
$user_name = "root";

//specify the password - it is empty
$password = "";

// specify the name of the database
$database = "Cars";

// Creating the connection by specifying the connection details
$connection = mysqli_connect($server_name, $user_name, $password, $database);

// Checking the  connection
if (!$connection) {
    die("Failed " . mysqli_connect_error());
}
echo "Connection established successfully";


// create a database
/*
$query = "CREATE DATABASE mycompany";
if (mysqli_query($connection, $query)) {
    echo "A new database called mycompany is successfully created!";
} else {
    echo "Error:" . mysqli_error($connection);
}
*/

// create a table
/*
$query = "CREATE TABLE  Service(
    id int,
    name varchar(244),
    count int
    )";
if (mysqli_query($connection, $query)) {
    echo "Table is successfully created in My_Company database.";
} else {
    echo "Error:" . mysqli_error($connection);
}
*/

// insert a new data
/*
$query = "INSERT INTO
    `INVENTORY` (`VIN`, `YEAR`, `Make`, `Model`, `TRIM`, `EXT_COLOR`, `INT_COLOR`, `ASKING_PRICE`, `SALE_PRICE`, `PURCHASE_PRICE`, `MILEAGE`, `TRANSMISSION`, `PURCHASE_DATE`, `SALE_DATE`) 
    VALUES ('1FTAX1EP7HFC74530', '2017', 'Fard', 'F150', 'XLT', 'Lightning Blue', 'Black', '34722.00', NULL, NULL, '17618', '6-Speed Automatic', NULL, NULL)";
if (mysqli_query($connection, $query)) {
    echo "A new record inserted into {$database}";
} else {
    echo "Error:" . mysqli_error($connection);
}
*/

// delete a record
/*
$query = "DELETE FROM `INVENTORY` WHERE `INVENTORY`.`VIN` = '1FTAX1EP7HFC74530'";
if (mysqli_query($connection, $query)) {
    echo "A record is deleted from {$database}";
} else {
    echo "Error:" . mysqli_error($connection);
}
*/
mysqli_close($connection);
