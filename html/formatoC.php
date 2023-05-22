<?php 


require_once 'conectaBanco.php';

if (!empty($_POST)) {
if ($_POST['formato'] == null){    header("Location: criar_classificacao.html");} else{
  try {

    $formato = $_POST['formato'];
    $valuer = 1;


    $sql = "SELECT idformato FROM formato";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetchAll();

    foreach ($result as $row) {
      $valuer = $valuer + 1;
            }

           
            $sql = "INSERT INTO formato (idformato,formato) VALUES (:valuer,:formato)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':formato'=>$formato,':valuer'=>$valuer));

    header("Location: criar_classificacao.html");

    
} catch (PDOException $e) {    echo 'deu ruim';
    echo $e->getMessage();
    echo $e->getCode();
}}
}
else {

  header("Location: index.html?msgErro=Erro de acesso.");
}
?>