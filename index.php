<?php

// Seção 

session_start();

if (!isset($_SESSION['nome'])) {
    $_SESSION['nome'] = 'Patrick';
} else {
    echo 'já existe';
}

echo $_SESSION['nome'];

// Essas informações da seção quando estartada ficam no servidor da aplicação por um tempo 

?>