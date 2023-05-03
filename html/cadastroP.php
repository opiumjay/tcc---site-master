<?php




$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}




require_once 'conectaBanco.php';

if (!empty($_POST)) {

  try {

    $categoria = $_POST['categoria'];
    $formato = $_POST['formato'];
    $cor = $_POST['cor'];
    $img = $target_file;
    


           
            $sql = "INSERT INTO cor (hex) VALUES (:cor)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':cor'=>$cor));

            echo "   ok   ";
    
            $sql = "SELECT idcategoria FROM categoria where categoria = :categoria";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':categoria'=>$categoria));
            $result = $stmt->fetchAll();
            $onetrue = $result[0]['idcategoria'];
            
            echo "   ok1   ";

            $sql = "SELECT idformato FROM formato where formato= :formato";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':formato'=>$formato));
            $result = $stmt->fetchAll();
            $twotrue = $result[0]['idformato'];
            
            echo "   ok2   ";

            

            $sql = "SELECT idcor FROM cor where hex= :cor";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':cor'=>$cor));
            $result = $stmt->fetchAll();
            $treetrue = $result[0]['idcor'];
            
            echo "   ok3   ";



    $sql = "INSERT INTO principal (categoria,formato,cor) VALUES (:categoria,:formato,:cor);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':cor'=>$treetrue, ':formato'=>$twotrue, ':categoria'=>$onetrue));


    

    $sql = "SELECT idprincipal FROM principal where categoria=$onetrue and formato=$twotrue and cor=$treetrue";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetchAll();
    $fourtrue = $result[0]['idprincipal'];

    $sql = "INSERT INTO imagem (idprincipal,imagem) VALUES (:pid,:img);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':img'=>$img, ':pid'=>$fourtrue));

    header("Location: index.html");

    
} catch (PDOException $e) {    echo 'deu ruim';
    echo $e->getMessage();
    echo $e->getCode();
}
}
else {

  header("Location: index.php?msgErro=Erro de acesso.");
}
?>