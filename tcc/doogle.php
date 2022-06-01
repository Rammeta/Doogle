<?php
//iniciando a conexão com o banco de dados 
$cx = mysqli_connect("127.0.0.1", "root", "");

$db = mysqli_select_db($cx, "test");

$sql = mysqli_query($cx, "SELECT id, nome FROM animal ORDER BY id DESC LIMIT 1") or die(mysqli_error($cx));
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nixie+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Doogle</title>
</head>

<body class="cor">
    <header>
        <div class="container-logo">
            <div class="logo-imagem"><img class="img1" src="img/DoodleLOGO_semfundo.png"></div>
            <!--<div class="logo-texto"><img class="img2" src="img/DoodleNOME_semfundonoborder.png"></div>-->
            <h1>Doogle</h1>

        </div>
        <div class="search-box">
            <input type="text" class="search-txt" placeholder="Digite sua cidade!">
            <img class="search-btn" src="img/1-17_icon-icons.com_68863.svg" height="30" width="30">

        </div>
        <div class="menu">
            <li class="btn btn-outline-light btn-sm btn-custom"><a href="#">Quero ajudar</a></li>
            <li class="btn btn-light btn-sm btn-custom"><a href="#">Quero adotar</a></li>
            <li class="btn btn-custom"><a href="#"><img class="icon" src="img/icons8-login-arredondado-64.png"></a></li>
        </div>
    </header>
    <center>
    <head>
        <div><img class="layout" src="img/layout.png"></div>
    </head>
    <center>
        <head>
            <i class="fa fa-paw fa_custom fa-2x"></i>
         <div>
                <h1 class="relac1">AFIM DE UM RELACIONAMENTO SÉRIO E MADURO?</h1>
         </div>
         <table>
             <th>
                <td>
                    <p class="play1">Adote um adulto!</p>
                    <br>
                    <p class="forum1">
                            <b>Todo mundo só quer saber de</b>
                        <br>
                            <b>filhotes, então a cada dia que</b>
                        <br>
                           <b>passa essas fofuras perdem</b>
                        <br>
                            <b>mais a chance de ter uma familia!</b>
                    </p>
                </td>
                <div >
                    <td>
                        <img class="fotos" src="img/josh.jpg"/>
                        <p id="teste">Josh</p>
                    </td>
                    <td>
                        <img class="fotos" src="img/luna.jpg"/>
                        <p id="teste">
                        <?php
                        while($aux = mysqli_fetch_assoc($sql)) { 
                            echo "" .$aux["nome"];
                            echo ", " .$aux["id"]."<br/>"; 
                          }
                        ?>
                        </p>
                       
                    </td>
                </div>
             </th>
            </table>
    </center>
</body>
</html>