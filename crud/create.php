<?php

require_once('../config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once('../database/conexao.php');

    $conn = conn();

    $tarefa = $_POST['tarefa'];

    foreach ($tarefa as $key => $value) {
        echo '<br/>' . $value;
        if(empty($value)){
            exit;
        }
    }
    echo 'aaaaq';
   $query = "INSERT INTO tarefas(`nome`,`descricao`, `concluido`) VALUES (?,?,?)";

    try {
        $stmt = $conn->prepare($query);
        $stmt->bind_param(
            'sss',
            $tarefa["nome"],
            $tarefa["descricao"],
            $tarefa["concluido"]
        );
        $stmt->execute();
        close_conn($conn);
        header('Location: ../views/create.php');
        die();

    } catch (\Throwable $th) {
        close_conn($conn);
        header('Location: ../views/create.php');
        die();
    }

}