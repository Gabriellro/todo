<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,200;1,800&display=swap" rel="stylesheet">
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
    <title>CREATE</title>
</head>
<body>
    <div class="container"> 
        <div class="row">
            <form method="post" action="../crud/create.php">
                <div class="col-12">
                    <span>
                        nome:
                    </span>
                    <input required type="text" placeholder="Nome da tarefa" name="tarefa[nome]">
                    <span>
                        descricao:
                    </span>
                    <input required type="text" placeholder="Nome da tarefa" name="tarefa[descricao]">


                    <span>
                        concluido:
                    </span>
                    <input required type="text" placeholder="" name="tarefa[concluido]">

                    <button class="btn btn-lg btn-info btn-block" type="submit">add</button>

                </div>
            </form>
        </div>

    </div>
</body>
</html>