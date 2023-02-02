<?php

include_once 'credenciais.php';

class BD{
    private $pdo;

    function __construct($user, $senha){
        $this->pdo = new PDO('mysql:host=localhost;dbname=testes', $user, $senha);
    }

    public function getConnection(){
        return $this->pdo;
    }
}

$bd = new BD(USER,SENHA);

for ($i=0; $i < 10; $i++) { 
    // Proteção de sql injec
    $sql = $bd->getConnection()->prepare("INSERT INTO `clientes` VALUES (null,?,?)");
    $sql->execute(array('teste', 'theu.siqueira@decathlon.com'));
}


$sql = $bd->getConnection()->prepare("SELECT * FROM clientes");

$sql->execute();

$clientes = $sql->fetchAll();

foreach ($clientes as $key => $value) {
    echo $value['nome'] . ' | ' . $value['emial'];
    echo '<br>';
}





?>

<p>oito pilhas por um real</p>

<p><?php echo USER?></p>
<p><?php echo SENHA?></p>