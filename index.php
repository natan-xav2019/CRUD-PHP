<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header>
        <h1>CRUD o que e?</h1>
    </header>

    <div>
        <main>
            <div>
                <h2>CRUD</h2>
            </div>

            <div>
                <p>CRUD e uma sigla para falar das 4 operações básicas de um banco de dados, Insert, Select, Update e
                    Delete.</p>

                <ul>
                    <li>C - CREATE</li>
                    <li>R - READ</li>
                    <li>U - UPDATE</li>
                    <li>D - DELETE</li>
                </ul>
            </div>

            <div>
                <h3>CREATE</h3>
                <p>Criar um novo registro.</p>
                <h3>READ</h3>
                <p>Ler um registro, ou uma lista de registros.</p>
                <h3>UPDATE</h3>
                <p>Atualizar um registro.</p>
                <h3>DELETE</h3>
                <p>Excluir um registro.</p>
            </div>


            <form action="" method="post">
                <label for="nome"> Nome </label>
                <input for="nome" type="text">
                <label for="idade"> Idade </label>
                <input for="idade" type="number">
            </form>


            <table>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th></th>
                </tr>
                <tr>
                    <td>Natan</td>
                    <td>23 anos</td>
                    <td></td>
                </tr>
            </table>
        </main>



        <footer>
            <p>feito por Natan Xavier.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>