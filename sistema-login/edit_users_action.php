<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$usermame = filter_input(INPUT_POST, 'username');

if($id && $name && $usermame){
    $sql = $pdo->prepare("UPDATE users_consult SET id = :id, name = :name, username = :username WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->bindValue(':name', $name);
    $sql->bindValue(':username', $usermame);
    $sql->execute();

    header("Location: list_users.php");
    exit;
}else{
    header("Location: list_users.php");
    exit;
}
 ?>