<?php 


require_once 'conectaBanco.php';

if (!empty($_POST)) {

  try {

    $categoria = $_POST['categoria'];    
    $valuer = 1;


    $sql = "SELECT idcategoria FROM categoria";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetchAll();

    foreach ($result as $row) {
      $valuer = $valuer + 1;
            }
    
           
            $sql = "INSERT INTO categoria (idcategoria,categoria) VALUES (:valuer,:categoria)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':categoria'=>$categoria,':valuer'=>$valuer));

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