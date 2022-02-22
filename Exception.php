<?php

function division(array $num){
    if($num['one'] == 0 || $num['two'] == 0){
        throw new Exception('Número zero identificado!');
    }

    return true;
}

$num = [
    'one' => 0,
    'two' => 3
];

$status = false;

try{
    $status = division($num);
}catch(Exception $e){
    //Evita gerar erro fatal
    echo $e->getMessage();
}finally{
    echo "\nStatus da operação: " . (int)$status;
    die();
}

echo "\n... Executando ...\n";