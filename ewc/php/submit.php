<?php

$cpf = $_POST['cpf'];
$blood = $_POST['blood'];
$dungaree = $_POST['dungaree'];
$cotton = $_POST['cotton'];
$shoe = $_POST['shoe'];

$conn = new mysqli('localhost','root','','test');
$sql = "INSERT INTO kits_table values('$cpf','$blood','$dungaree','$cotton',$shoe,now())";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "failed";
}

$conn->close();


?>