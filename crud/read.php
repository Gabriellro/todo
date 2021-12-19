<?php

// function pegaDadostarefas($conn, $id)
// {

//     $cliente_bd = $conn->prepare("SELECT * from tarefas where id = ?");
//     $cliente_bd->bind_param('i', $id);
//     $cliente_bd->execute();
//     $res = $cliente_bd->get_result();

//     return $res->fetch_assoc();
// }

function pegaDadostarefas($conn)
{
    $query = "SELECT * from tarefas order by nome";
    $cliente_bd = $conn->prepare($query);
    $cliente_bd->execute();
    $res = $cliente_bd->get_result();

    return $res->fetch_all(MYSQLI_ASSOC);
}

