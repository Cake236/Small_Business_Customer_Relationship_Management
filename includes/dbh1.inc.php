<?php

$serverName1 = "localhost";
$dBUsername1 = "root";
$dBPassword1 = "";
$dBName1 = "timestamp";

$connlogin = mysqli_connect($serverName1, $dBUsername1, $dBPassword1, $dBName1);

if (!$connlogin) {
  die("Connection failed: " . mysqli_connect_error());
}