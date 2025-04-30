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
        <div class='formulario'>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Nascimento</th>
                    <th>Mensagem</th>
                    <th>Sexo</th>
                </tr>";

                while($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                    <td>". $rows['id'] . "</td>
                    <td>". $rows['nome'] . "</td>
                    <td>". $rows['email'] . "</td>
                    <td>". $rows['tel'] . "</td>
                    <td>". $rows['nasc'] . "</td>
                    <td>". $rows['mensagem'] . "</td>
                    <td>". $rows['sexo'] . "</td>
                </tr>";
                };
        echo "</table>            
        </div>
    </section>
</body>";

?>