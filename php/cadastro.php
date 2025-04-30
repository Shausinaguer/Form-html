<?php 

include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
$nasc = $_POST['nasc'];
$mensagem = $_POST['mensagem'];
$sexo = $_POST['sexo'];

$sql = "INSERT INTO inscrito (nome, email, tel, nasc, mensagem, sexo) VALUES ('$nome','$email','$tel','$nasc','$mensagem','$sexo')";

$stmt = $pdo->query($sql);

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

header("Location:listadecadastro.php");
exit;
?>