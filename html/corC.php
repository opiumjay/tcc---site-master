<?php 


require_once 'conectaBanco.php';

if (!empty($_POST)) {

  try {

    $cor = $_POST['cor'];    
    $valuer = 1;


    $sql = "SELECT idcor FROM cor";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetchAll();

    foreach ($result as $row) {
      $valuer = $valuer + 1;
            }
    
           
            $sql = "INSERT INTO cor (idcor,hex) VALUES (:valuer,:hex)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':hex'=>$cor,':valuer'=>$valuer));

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