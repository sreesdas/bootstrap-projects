<?php

$conn = new mysqli('localhost', 'root', '', 'test');

$cpf = $_GET['cpf'];
$name = '';

$sql = "SELECT * FROM employee WHERE CPF = '". $cpf ."'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $name = $row['NAME'];
		break;
	}
}

echo $name;

?>