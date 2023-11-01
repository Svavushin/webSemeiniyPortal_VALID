<?php

$servername = "localhost";
$_username = "root";
$_password = "100205";

$connect_sql = new mysqli($servername, $_username, $_password);

$db = $connect_sql->select_db("msg");


if ($connect_sql->connect_error) {
  die("Connecion failed" . $connect_sql->connect_error);
}

if (($_SERVER["REQUEST_METHOD"] == "POST") && ($connect_sql)) {





  $username_form = $_POST["name"];
  $number_form = $_POST["number"];
  $msg_form = $_POST["msg"];


  // удаление всех символов, кроме цифр
  $cleanNumber = preg_replace("/\D/", '', $number_form);


  $sql_query = "INSERT INTO msg_store (name,phone,msg) VALUES (?,?,?);";



  $stmt = $connect_sql->prepare($sql_query);
  $stmt->bind_param("sss", $username_form, $cleanNumber, $msg_form);

  $stmt->execute();

  echo var_dump($stmt);
}
