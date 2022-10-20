<?php
function age($age)
{
  list($year, $month, $day) = explode("-", $age);
  $year_diff = date("Y") - $year;
  $month_diff = date("m") - $month;
  $day_diff = date("d") - $day;
  if ($month_diff < 0) {
    $year_diff--;
  }
  return $year_diff;
}

echo age("1996-03-22") . "\n";
