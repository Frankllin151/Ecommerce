<?php 
require '../config.php';
$id = filter_input(INPUT_POST, 'id');

$tokenempy = "";

$sql = $pdo->prepare("UPDATE USERS SET  token = :token WHERE id = :id");

$sql->bindValue(':token', $tokenempy);

$sql->bindValue(':id', $id);

$sql->execute(); 

header("Location: ". $Ba_se);


