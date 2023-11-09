<?php
include "class/Crud.php";
include "class/Connection.php";
include "assets/function/formatAge.php";

$conn = new Connection();

if(isset($_POST["create"],$_POST["name"],$_POST["age"])) {
    $user = [
        "name" => $_POST["name"],
        "age" => $_POST["age"],
    ];

    $conn->create($user);
}

if(isset($_POST["delele"])) {
    $conn->delete($_POST["id"]);
}

if(isset($_POST["update"])) {
    $id = $_POST['id'];
    header("Location: updateUser.php?id=$id");
}

$users = $conn->read(True);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/image/favicon.svg" type="image/x-icon">
    <title>CRUD PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header class="container">
        <h1 class="text-center">CRUD o que e?</h1>
    </header>

    <div class="container">
        <main>
            <div class="text-center">
                <h2>CRUD</h2>
            </div>
            <div class="row">
                <p>CRUD e uma sigla para falar das 4 operações básicas de um banco de dados, Insert, Select, Update e
                    Delete.</p>

                <ul>
                    <li>C - CREATE</li>
                    <li>R - READ</li>
                    <li>U - UPDATE</li>
                    <li>D - DELETE</li>
                </ul>
            </div>
            <div class="row">
                <div class="col">
                    <h3>CREATE</h3>
                    <p>Criar um novo registro.</p>
                </div>
                <div class="col">
                    <h3>READ</h3>
                    <p>Ler um registro, ou uma lista de registros.</p>
                </div>
                <div class="col">
                    <h3>UPDATE</h3>
                    <p>Atualizar um registro.</p>
                </div>
                <div class="col">
                    <h3>DELETE</h3>
                    <p>Excluir um registro.</p>
                </div>
            </div>
            
            <div>
                <form class="row" id="from-create" action="index.php" method="post">
                    <div class="form-group text-center">
                        <h1>Insira os dados para aparecer na tabela</h1>
                    </div>
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input class="form-control" placeholder="digite o nome" id="name" name="name" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Idade</label>
                        <input class="form-control" placeholder="digite a idade" id="age" name="age" type="number" required>
                    </div>
                    <div class="form-group mt-2">
                        <input class="btn btn-primary" type="submit" name="create"  value="Enviar">
                    </div>
                </form>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Comandos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user):?>
                        <tr>
                            <td><?=$user["name"]; ?></td>
                            <td><?= formatAge($user["age"]);?></td>
                            <td>
                                
                                <form action="index.php" id="form-delete" method="post">
                                    <input type='hidden' name='id' value=<?= $user["id"] ?>>
                                    <button type="submit" name="update" class="btn btn-outline-primary">Editar</button>
                                    <button type="submit" name="delele" class="btn btn-danger">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </main>

        <footer class="footer">
            <p>feito por Natan Xavier.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>