<?php

require_once('config.php');
require_once('crud/read.php'); 
require_once('database/conexao.php');

$conn = conn();

$tarefas = pagatarefas($conn, $id);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/records.css">
    <link rel="stylesheet" href="css/modal.css">
    <script src="main.js" defer></script>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
    <title>ToDo</title>
</head>

<body>
    <div class="w3-sidebar w3-bar-block w3-xxlarge" style="width:70px">
        <a href="#" class="w3-bar-item w3-button"><span class="material-icons-round">search</span></a>
        <a href="#" class="w3-bar-item w3-button"><span class="material-icons-round">search</span></a> 
        <a href="#" class="w3-bar-item w3-button"><span class="material-icons-round">search</span></a> 
        <a href="#" class="w3-bar-item w3-button"><span class="material-icons-round">search</span></a>
        <a href="#" class="w3-bar-item w3-button"><span class="material-icons-round">search</span></a> 
    </div>
</body>

</html>