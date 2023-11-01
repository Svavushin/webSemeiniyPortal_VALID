<?php

$servername = "localhost";
$_username = "root";
$_password = "100205";

$connect_sql = new mysqli($servername, $_username, $_password);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $value = $_POST['modaldata'];
  echo $value;
}


$connect_sql = new mysqli($servername, $_username, $_password);

if ($connect_sql->connect_error) {
  die("Connecion failed" . $connect_sql->connect_error);
}

if (($_SERVER["REQUEST_METHOD"] == "GET") && ($connect_sql)) {

  $username_form = $_GET["name"];
  $number_form = $_GET["number"];
  $msg_form = $_GET["msg"];
}
