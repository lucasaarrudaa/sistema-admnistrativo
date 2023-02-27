<?php
require 'config.php';
// Filtra o resultado e faz uma query com o valor do id
$id = filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare("DELETE FROM users_consult WHERE id = :id");
    $sql->bindValue(':id',$id);
    $sql->execute();
}
header("Location:list_users.php");
?>

