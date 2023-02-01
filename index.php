<?php

// Variavél
$nome = 'Patrick';
echo "Meu nome é $nome";
$nome = 'João';
echo 'Meu nome é ' .$nome;

//Constante 
define('ConstNome', 'Patrick');
echo ConstNome;

// Função em PhP

function printarNome($nome){
    echo '<h3>Meu nome é ' . $nome .'<h3/>';
    echo '<br/>';
}

printarNome('Patrick');
printarNome('João');

// funcões nativas exemplo

$frase = 'O rato roeu a roupa do rei de roma, onde está o rato até hoejeu não sei';

echo substr($frase, 0, 8);

// Laços de repetições


for ($i=0; $i < 100 ; $i++) { 
    echo 'Patrick '.$i;
    # code...
}

$a = 0;

while($a <= 10) {~
    $a++;
    echo $a;    
    # code...
}

$a = 0;
do {
    $a++;
    echo $a;
    
} while ($a <= 10);

?>