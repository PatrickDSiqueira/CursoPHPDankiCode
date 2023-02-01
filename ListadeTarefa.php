<?php
session_start();

// Validando formulario

if (isset($_POST['acao'])) {
    // Recuperar valor do Input
    // Strip_tags deixa o texto "livre, pelado"
    $tarefa = strip_tags($_POST['tarefa']);

    if (!isset($_SESSION['tarefas'])) {
        $_SESSION['tarefas'] = array();
        $_SESSION['tarefas'][] = $tarefa;
        # code...
    } else {
        $_SESSION['tarefas'][] = $tarefa;
    }

    echo '<script>alert("tarefa foi adicionada.");</script>';

    // Erro ()
    // echo '<script>alert("tarefa foi adicionada.");<script/>';

    // O que aconteceu ???
    // O endereco ia pra um que finalizava com a /
    // e a tela ficava branca

    // Solução :
    // Fechamento correto da tag script   --> </script>

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lista de Tarefas | Danki Code</title>
    <style type="text/css">
        * {
            margin: 0;
            box-sizing: 0;
            box-sizing: 0;
        }

        form {
            max-width: 600px;
            margin: 10px auto;
            display: block;
        }

        input[type=text] {
            width: 100%;
            height: 40px;
            border: 1px solid #ccc;
            padding-left: 10px;
        }

        input[type=submit] {
            width: 100%;
            height: 40px;
            background-color: #069;
            color: white;
            font-size: 17px;

        }

        h3 {
            text-align: center
        }
    </style>
</head>

<body>
    <form method="post">
        <input type="text" name="tarefa" placeholder="Digite sua tarefa...">
        <input type="submit" name="acao" value="Enviar">
    </form>
    <br>
    <h3>Suas Tarefas Atuais</h3>
    <?php
    foreach ($_SESSION['tarefas'] as $key => $value) {
        echo '<p>Tarefa #' . $key . ' ' . $value . '</p>';
    }
    ?>

</body>

</html>