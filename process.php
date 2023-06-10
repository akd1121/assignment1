<?php

$title = $_POST["message title"];
$description = $_POST["message description"];

$conn = mysqli_connect('localhost', 'root', '', 'notice_board');
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

$sql = "insert into notices(notice, notice description) values('$title','$description')";

echo('record saved');
?>