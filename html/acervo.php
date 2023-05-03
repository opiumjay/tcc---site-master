<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!--fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <!--propriedades css-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/btnPopUp.css">
    <link rel="stylesheet" href="../css/popUpContent.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/acervo.css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">

</head>

<body style="background-color: #000000; font-family: 'Quicksand', sans-serif; position: relative;">
    <!--links js off e online-->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>

    <!--popper js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i"
        crossorigin="anonymous"></script>

    <!--funções que abre e fecha o pop up-->
    <script>
        function showPopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "flex";
        }
    </script>

    <script>
        function hidePopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "none";
        }
    </script>

    <!--! navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="../img/navbar/back.png" alt="Bootstrap" width="30" height="24">
            </a>
            <a class="navbar-brand" style="margin-left: 1rem; font-size: 20px;">Meu Acervo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header" style="background-color: #000000;">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                        <div class="userPic">
                            <img src="../img/teste.jpeg">
                            <h3>Username</h3>
                        </div>
                        <div class="menu">
                            <ul>
                                <li>
                                    <a href="acervo.html">
                                        <img class="btnAcervo" src="../img/menu/grid.png"
                                            alt="Ícone da opção acervo">Meu Acervo
                                    </a>
                                </li>
                                <li>
                                    <a href="testeopt.html">
                                        <img class="btnRandom" src="../img/menu/shuffle.png"
                                            alt="Ícone da opção acervo">Random
                                    </a>
                                </li>
                                <li>
                                    <a href="testeopt.html">
                                        <img class="btnBackup" src="../img/menu/bkp.png"
                                            alt="Ícone da opção acervo">Backup
                                    </a>
                                </li>
                                <li>
                                    <a href="testeopt.html">
                                        <img class="btnConfig" src="../img/menu/setting.png"
                                            alt="Ícone da opção acervo">Configurações
                                    </a>
                                </li>
                                <li>
                                    <a href="testeopt.html">
                                        <img class="btnInfo" src="../img/menu/info.png"
                                            alt="Ícone da opção acervo">Informações do Aplicativo
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!--div principal-->
    <div style="margin-top: 5%; padding: 2%;">

        <!-- div que porta todo o grid-->
        <div class="grid-container">


            <?php
require_once 'conectaBanco.php';
try {
	$sql = "SELECT * FROM imagem";
	$stmt = $pdo->query($sql)->fetchAll();
?>
<?php
	foreach ($stmt as $row) {
?><img src=" <?php echo $row['imagem'] ?>"> <?php }}catch (PDOException $e) {
	
} ?>

        </div>
    </div>

    <!--! botão add peça -->
    <div class="circle" onclick="showPopup()">
        <div class="cross">
        </div>
    </div>

    <!--! pop up add peça -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <form action="cadastroP.php" method="post" enctype="multipart/form-data">


                <select id="categoria" name="categoria">
                    <option selected="nullCategoria">Categoria</option>
                    <optgroup label="Vestuário Superior">


                        <option value="camisa">Camiseta</option>
                        <option value="moletom">Moletom</option>
                        <option value="jaqueta">Jaqueta</option>
                        <option value="regata">Regata</option>
                        <option value="manga_longa">Camisa de Manga Longa</option>
                        <option value="sueter">Suéter</option>
                        <option value="colote">Colete</option>
                        <option value="top">Top</option>


                    </optgroup>
                    <optgroup label="Vestuário Inferior">


                        <option value="calca">Calça</option>
                        <option value="short">Short</option>
                        <option value="saia">Saia</option>
                        <option value="bermuda">Bermuda</option>
                        <option value="legging">Legging</option>


                    </optgroup>
                    <optgroup label="itens Para Cabeça">


                        <option value="bone">Boné</option>
                        <option value="chapeu">Chapéu </option>
                        <option value="touca">Touca</option>
                        <option value="heahband">Headband</option>
                        <option value="lenco">Lenço</option>


                    </optgroup>
                    <optgroup label="Bolsas">


                        <option value="mochila">Mochila</option>
                        <option value="tote_bag">Tote Bag</option>
                        <option value="sling_bag">Sling Bag</option>


                    </optgroup>
                    <optgroup label="Acessórios">


                        <option value="colar">Colar</option>
                        <option value="anel">Anél</option>
                        <option value="pulseira">Pulseira</option>
                        <option value="brinco">Brinco</option>
                        <option value="pingente">Pingente</option>


                    </optgroup>
                    <option value="tenis">Tênis</option>
                    <br>
                </select>


                <select id="formato" name="formato">
                    <option selected="nullFormato">Formato</option>
                    <option value="justo">Justo</option>
                    <option value="normal">Normal</option>
                    <option value="largo">Largo</option>
                </select>
                <br>
                <div>
                    <center><label style="color: #ffffff; font-size: 15px; margin-bottom: 5%; text-align: center;">
                            Selecione a cor primária da peça:</label>


                        <input type="color" class="form-control form-control-color" id="cor" name="cor" 
                            value="#563d7c">
                    </center>
                </div>

                <div class="mb-3" style="margin-top: 10%;">


                    <input class="form-control form-control-sm input_file_popUp" name="fileToUpload" id="fileToUpload" type="file">
                </div>

                <div style="display: flex; justify-content: flex-start; margin-top: 5%;">
                    <button type="button" onclick="hidePopup()">Voltar</button>
                    <button type="submit">Adicionar</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>