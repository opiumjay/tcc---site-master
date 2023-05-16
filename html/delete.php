<?php 
                    require_once 'conectaBanco.php';
                    
                if (isset($_POST['cor'])) {
                $cor = $_POST['cor'];
                $idcor = $_POST['idcor'];

                $sql = "delete FROM cor where idcor= :idcor and hex= :cor";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(':cor'=>$cor,':idcor'=>$idcor));

                header("Location: cores_cadastradas.php");

                }
                if (isset($_POST['categoria'])) {
			    $categoria = $_POST['categoria'];
			    $idcategoria = $_POST['idcategoria'];

                $sql = "delete from categoria where idcategoria= :idcategoria and categoria=:categoria";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(':categoria'=>$categoria,':idcategoria'=>$idcategoria));

                header("Location: categorias_cadastradas.php");

                }

                if (isset($_POST['formato'])) {
			    $formato = $_POST['formato'];
                $idformato = $_POST['idformato'];

                $sql = "delete FROM formato where idformato= :idformato and formato= :formato";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(':formato'=>$formato,':idformato'=>$idformato));

                header("Location: formatos_cadastrados.php");

                }

                    
                    
                    ?>