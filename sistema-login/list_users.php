<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>ADMIN</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Busque por ID </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <form action="search_action.php" method="GET">
                                    <div class="input-group mb-3">
                                        <input href="search_users.php" type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Digite o ID que deseja buscar">
                                        <button href="search_users.php" type="submit" class="btn btn-primary">Search</button>
                                        <a href="welcome.php" class="btn btn-warning">Voltar</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Usuário</th>
                                    <th>E-mail</th>
                                    <th>Opcões</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                //lista todos os usuários;
                                    require 'config.php';
                                    $list = [];
                                    $sql = $pdo->query("SELECT * FROM users_consult");
                                    if($sql->rowCount() > 0){
                                        $list = $sql->fetchAll(PDO::FETCH_ASSOC);
                                    }
                                    foreach($list as $user): ?>                                
                                        <tr>
                                            <td><?= $user['id']; ?></td>
                                            <td><?= $user['name']; ?></td>
                                            <td><?= $user['username']; ?></td>
                                            <td><?= $user['email']; ?></td>
                                            <td>
                                                <a href="edit_users.php?id=<?=$user['id'];?>">[ -- Editar -- ]</a>
                                                <a href="exclude_users.php?id=<?=$user['id'];?>">[ -- Excluir -- ]</a> 
                                                <form method="POST" action="edit_users_action.php">
                                                <input type="hidden" name="id" value="<?=$user['id'];?>"/>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>