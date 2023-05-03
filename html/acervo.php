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
     <nav class="navbar navbar-dark" style="background-color: #000000;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="../img/navbar/back.png" alt="Bootstrap" width="25" height="25">
            </a>
            <a class="navbar-brand" style="margin-left: 1rem; font-size: 20px; color: #F7F7F7;">Meu Acervo</a>
            <a class="navbar-brand" data-bs-toggle="modal" data-bs-target="#filtroacervo">
                <img src="../img/navbar/filtro.png" alt="Bootstrap" width="30" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--menu-->
            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header" style="background-color: #000000;">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" style="background-color: #303030;">
                    <div class="d-grid" style="place-items: center;">
                        <div class="userPic">
                            <img style="width: 30%;" src="../img/menu_dark/perfil.png">
                            <h1 style="margin-top: 5%; color: #e7e7e7;">Username</h1>
                        </div>
                        <div class="menu">
                            <ul>
                                <li>
                                    <a href="index.html">
                                        <img class="btnAcervo" src="../img/menu_dark/home.png"
                                            alt="Ícone da opção acervo">Home
                                    </a>
                                </li>
                                <li>
                                    <a href="testeopt.html">
                                        <img class="btnRandom" src="../img/menu_dark/shuffle-arrows.png"
                                            alt="Ícone da opção acervo">Random
                                    </a>
                                </li>
                                <li>
                                    <a href="testeopt.html">
                                        <img class="btnBackup" src="../img/menu_dark/copia-de-seguranca.png"
                                            alt="Ícone da opção acervo">Backup
                                    </a>
                                </li>
                                <li>
                                    <a href="testeopt.html">
                                        <img class="btnConfig" src="../img/menu_dark/config.png"
                                            alt="Ícone da opção acervo">Configurações
                                    </a>
                                </li>
                                <li>
                                    <a href="testeopt.html">
                                        <img class="btnInfo" src="../img/menu_dark/informacoes.png"
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

<!-- Modal -->
<div class="modal fade" id="filtroacervo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Filtro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <label>Categoria</label>

                <select class="selectpicker" multiple data-live-search="true">
                    <option>Top Wear</option>
                    <option>Calças</option>
                    <option>Tênis</option>
                    <option>Acessórios</option>
                    <option>Head Wear</option>
                </select>
                <br>
                <label>Formato</label>
                <select class="selectpicker" multiple data-live-search="true">
                    <option>Justo</option>
                    <option>Normal</option>
                    <option>Largo</option>
                </select>
                <br>
                <div class="d-inline-flex p-2">
                    <label>Cor:</label>
                    <div style="margin-left: 15%;">
                        <input type="color" name="corFiltro">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-secondary">Aplicar Filtros</button>
            </div>
        </div>
    </div>
</div>

<!-- div que porta todo o grid-->
<div class="grid-container">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
    <img src="../img/teste.jpeg">
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
            <form>
                <select id="selecaoDeCategoria" name="selecaoDeCategoria">
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
                <select id="selecaoDeFormato" name="selecaoDeFormato">
                    <option selected="nullFormato">Formato</option>
                    <option value="justo">Justo</option>
                    <option value="normal">Normal</option>
                    <option value="largo">Largo</option>
                </select>
                <br>
                <div>
                    <center><label style="color: #ffffff; font-size: 15px; margin-bottom: 5%; text-align: center;">
                            Selecione a cor primária da peça:</label>
                        <input type="color" class="form-control form-control-color" id="exampleColorInput"
                            value="#563d7c">
                    </center>
                </div>

                <div class="mb-3" style="margin-top: 10%;">
                    <input class="form-control form-control-sm input_file_popUp" id="formFileSm" type="file">
                </div>

                <div style="display: flex; justify-content: flex-start; margin-top: 5%;">
                    <button type="button" onclick="hidePopup()">Voltar</button>
                    <button type="submit">Adicionar</button>
                </div>
            </form>
        </div>
    </div>


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