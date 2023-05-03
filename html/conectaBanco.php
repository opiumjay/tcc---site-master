<?php
//Habilitar PDO postgres

//endereço
$endereco = 'localhost';
//nome
$banco = 'acervo';
//usuario
$usuario = 'postgres';
//senha
$senha = "123";

try {
    //conexão com Driver -> SGBD:HOST;PORT;DBNAME, Usuario, senha, ERRMODE
    
    $pdo = new PDO("pgsql:host=".$endereco.";port=5432;dbname=".$banco, $usuario, 
            $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    
} catch (PDOException $exc) {
    echo "Falha na conexão!";
    echo $exc->getTraceAsString();
}


?>
