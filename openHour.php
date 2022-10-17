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
    if (date('l') == 'Monday') {
        echo 'sorry, we are closed today.';
    } elseif ((date('l') == 'Saturday') | (date('i') == 'Sunday')) {
        echo "We are open today from 9 AM to 9PM";
    } else {
        echo "We are open today from 10 AM to 6 PM";
    }
    ?>
</body>

</html>