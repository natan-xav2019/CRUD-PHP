<?php
include "class/Crud.php";
include "class/Connection.php";
$conn = new Connection();

if(isset($_GET["id"])) {
    $id = $_GET["id"];
    
    $person = $conn->read("id = $id");
    $person = $person->fetch_assoc();
    
    $name = $person["name"];
    $age = $person["age"];
}

if (isset($_POST["update"],$_POST["name"],$_POST["age"])) {

    $user = [
        "name" => $_POST["name"],
        "age" => $_POST["age"],
    ];

    $conn->update($_POST["id"],$user);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizando dados</title>
    <link rel="shortcut icon" href="./assets/image/favicon.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header class="container">
        <h1 class="text-center">Metodo UPDATE</h1>
    </header>
    <?php if(isset($_GET["id"])): ?>
    <div class="container">
        <form class="row" id="from-update" action="updateUser.php" method="post">
            <input type='hidden' name='id' value=<?= $id ?>>
            <div class="form-group text-center">
                <h1>Insira os dados para alteração</h1>
            </div>
            <div class="form-group">
                <label for="name">Nome</label>
                <input class="form-control" placeholder="digite o nome" id="name" name="name" type="text"
                    value="<?= $name ?? "Sem nome" ?>" required>
            </div>
            <div class="form-group">
                <label for="age">Idade</label>
                <input class="form-control" placeholder="digite a idade" id="age" name="age" type="number"
                    value="<?= $age ?? "0" ?>" required>
            </div>
            <div class="form-group mt-2">
                <input class="btn btn-primary" type="submit" name="update" value="Enviar">
                <a class="btn btn-outline-primary" href="index.php">Voltar</a>
            </div>
        </form>
    </div>
    <?php else:
        echo "<h1>Esta sem id<h1>";

    endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>