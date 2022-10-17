<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>the first page</title>
</head>

<body>
  <h1>PHP Test</h1>
  <h2><?php echo date('jS \o\f F Y'); ?></h2>
  <p>
    <?php
    $target = mktime(10, 30, 0, 10, 15, 2022);
    $today = time();
    $difference = $target - $today;
    $minutes = (int) ($difference / 60);
    if ($minutes > 0) {
      echo "you have {$minutes} minutes left!";
    } else {
      echo "the countdown is over!!!!";
    }
    ?>
  </p>
</body>

</html>