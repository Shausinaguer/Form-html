<?php

include ('conexao.php');

$sql = "SELECT * FROM inscrito";

$stmt = $pdo->query($sql);

echo "<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Cadastro</title>
    <link type='text/css' rel='stylesheet' href='../css/style.css'>
</head>

<body>
    <header>
        <div class='nav-bar'>
            <div class='buttons'>
                <a href=''>
                    <div>Login</div>
                </a>
                <a href=''>
                    <div>Cadastrar</div>
                </a>
            </div>
            <div class='title'>
                <a href=''>Cadastrator</a>
            </div>
        </div>
    </header>
    <section>
        <div class='container'>
            <div class='title'>
                <h1>Usuários Cadastrados</h1>
            </div>
            <table class='table'>
                <tr class='table-header'>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Nascimento</th>
                    <th>Mensagem</th>
                    <th>Sexo</th>
                </tr>";

                while($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr class='table-row'>
                    <td>". $rows['id'] . "</td>
                    <td>". substr($rows['nome'], 0, 10) . (strlen($rows['nome']) > 10 ? '...' : '') . "</td>
                    <td>". substr($rows['email'], 0, 10) . (strlen($rows['email']) > 10 ? '...' : '') . "</td>
                    <td>". substr($rows['tel'], 0, 10) . (strlen($rows['tel']) > 10 ? '...' : '') . "</td>
                    <td>". substr($rows['nasc'], 0, 10) . (strlen($rows['nasc']) > 10 ? '...' : '') . "</td>
                    <td>". substr($rows['mensagem'], 0, 10) . (strlen($rows['mensagem']) > 10 ? '...' : '') . "</td>
                    <td>". $rows['sexo'] . "</td>
                </tr>";
                };
        echo "</table>
        </div>
    </section>
</body>";

?>