<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Riki's Book Store</title>
    <style>
        body {
            width: 80vw;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <h1>Welcome to the Homepage of Riki's Book Store!!!</h1>
    <?php
    date_default_timezone_set("Asia/Tokyo");
    // 
    $today = date('l');
    // 
    $today = "Tuesday";
    // 
    switch ($today) {
        case "Monday":
            echo "We are closed today";
            break;
        case "Saturday":
            echo "We are open today from 9 AM to 9 PM";
            break;
        case "Sunday":
            echo "We are open today from 9 AM to 8 PM";
            break;
        case $today:
            echo "We are open today from 10 AM to 7 PM";
            break;
    }
    ?>
</body>

</html>