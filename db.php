<?php

require_once('configPdo.php');

// $usuarios = $pdo->query("SELECT * FROM usuarios")->fetchAll();

// echo $usuarios[0]['nome'];

// $nome = "Icaro Jobs";

// $query = $pdo->prepare("SELECT * FROM usuarios WHERE nome = :nome");
// $query = $pdo->prepare("SELECT * FROM usuarios WHERE nome LIKE ?");
// $query->execute(['nome' => $nome]);
// $resultado = $query->fetch();
// $resultado = $query->fetchAll(); // para o like

// var_dump($resultado);

// inserindo dados
// $row = [
//     'nome' => 'Icaro Will',
//     'email' => 'icarowill@teste.com.br'
// ];

// $sql = "INSERT INTO usuarios SET nome=:nome, email=:email;";
// $status = $pdo->prepare($sql)->execute($row);

// if ($status) {
//     $usuarioId = (int) $pdo->lastInsertId();
// }

// echo $usuarioId;

// atualizando dados
// $row = [
//     'id' => 3,
//     'nome' => 'Icaro Silva',
//     'email' => 'icarosilva@teste.com.br'
// ];

// $sql = "UPDATE usuarios SET nome=:nome, email=:email WHERE id=:id;";
// $status = $pdo->prepare($sql)->execute($row);

// echo "Atualizado";

// excluindo dados
// $where = ['id' => 3];
// $pdo->prepare("DELETE FROM usuarios WHERE id=:id")->execute($where);

// echo "Excluído com sucesso";

// próxima aula => 6