<?php 


require_once 'conectaBanco.php';

if (!empty($_POST)) {

  try {

    $categoria = $_POST['categoria'];
    
           
            $sql = "INSERT INTO categoria (categoria) VALUES (:categoria)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':categoria'=>$categoria));

    header("Location: criar_classificacao.html");

    
} catch (PDOException $e) {    echo 'deu ruim';
    echo $e->getMessage();
    echo $e->getCode();
}
}
else {

  header("Location: index.php?msgErro=Erro de acesso.");
}
?>