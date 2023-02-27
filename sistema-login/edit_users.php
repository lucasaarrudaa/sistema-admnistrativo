<?php
require 'config.php';

$username = [];
$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("SELECT * FROM users_consult WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount()>0){
        $username=$sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("Location: list_users.php");
    }
}else{
    header("Location: list_users.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h2 class="my-3">Por favor, tenha cautela ao editar informações</h2>
    <p>
        <a href="welcome.php" class="btn btn-primary">Voltar</a>
        <a href="search_action.php" class="btn btn-primary">Filtrar por ID</a>
    </p>
    <div> 
        <form method="POST" action="edit_users_action.php">
            <input type="hidden" name="id" value="<?=$username['id'];?>"/>
            <label> 
                Nome: <input type="text" name ="name" value="<?=$username['name'];?>"/>
            </label>
            <label> 
                Usuário: <input type="text" name ="username" value="<?=$username['username'];?>"/>
            </label>
            <input type = "submit" value="Atualizar"/>
        </form>
    </div>
</body>
