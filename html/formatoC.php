<?php 


require_once 'conectaBanco.php';

if (!empty($_POST)) {

  try {

    $formato = $_POST['formato'];
    
           
            $sql = "INSERT INTO formatoteste (formato) VALUES (:formato)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':formato'=>$formato));

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