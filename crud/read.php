<?php

function pagatarefas($conn, $id)
{

    $cliente_bd = $conn->prepare("SELECT * from tarefas where id = ?");
    $cliente_bd->bind_param('i', $id);
    $cliente_bd->execute();
    $res = $cliente_bd->get_result();

    return $res->fetch_assoc();
}

