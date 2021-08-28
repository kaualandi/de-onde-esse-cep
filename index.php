<?php
    RegistrarUser();
    date_default_timezone_set("America/Sao_Paulo");
    $cep = filter_input(INPUT_GET, "cep", FILTER_SANITIZE_STRING);
    $tipo_logradouro = "Logradouro";
    $Logradouro = "";
    $Bairro = "";
    $Cidade = "";
    $Estado = "";
    $ddd = "";
    $texto = "";
    $cep_number = str_replace("-","",$cep);
    if ($cep_number) {
        $resultJSON = file_get_contents("https://viacep.com.br/ws/".$cep_number."/json/");
        $resultArr = json_decode($resultJSON);
            $ddd = $resultArr->ddd;
            $Logradouro = $resultArr->logradouro;
            $Bairro = $resultArr->bairro;
            $Cidade = $resultArr->localidade;
            $Estado = $resultArr->uf;
            gravarTXT("encontrado.txt","CEP: {$cep}\r\nRua: {$resultArr->logradouro}\r\nBairro: {$resultArr->bairro}\r\nCidade: {$resultArr->localidade}\r\nEstado: {$resultArr->uf}\r\nDDD: {$resultArr->ddd}","w+");
    }
    function gravarTXT($arquivo, $texto, $act) {
        $fp = fopen($arquivo, $act);
        fwrite($fp, $texto);
    }
    function RegistrarUser() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if(isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } else if(isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } else if(isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } else if(isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        } else {
            $ipaddress = 'UNKNOWN';
        }
        $dataehora = date("d/m/Y H:i:s");
        gravarTXT("assets/log-entrada.txt", "IP: ".$ipaddress." || ".$dataehora."<br>\r\n","a+");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script type="text/javascript" src="/assets/scripts/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="/assets/scripts/jquery.maskedinput-1.1.4.pack.js"></script>
    <script src="/assets/scripts/mask.js"></script>
    <title>De Onde É Esse CEP?</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles/main.css">
    <link rel="stylesheet" href="/assets/styles/landing.css">
    <link rel="shortcut icon" href="/favicon.svg">
</head>
<body>
    <header id="header">
        <div id="header-div-logo">
            <h1 class="logo">De Onde É Esse CEP?</h1>
        </div>
    </header>
    <main>
        <div class="to-flex">
            <h2 id="bemvido">Bem vindo.</h2>
            <div class="box-board">
                <div class="board">
                    <header>
                        <p>Busque aqui.</p>
                     </header>
                    <form  method="GET" action="">
                        <label for="cep">CEP</label>
                        <input required type="tel" maxlength="8" name="cep" id="cep" class="mask-zipcode" placeholder="99999-999">
                        <button type="submit"><i class="fas fa-search"></i>Buscar</button>
                    </form>
                    <div class="error404 off">
                        <p>Pedimos desculpas mas não consguimos encontrar esse CEP, pode ser um erro interno ou ele não exista. Verifique o CEP e tente novamente.</p>
                    </div>
                </div>
                <div class="board">
                    <header>
                        <p>Resultado.</p>
                    </header>
                    <form id="searched">
                        <label>CEP</label>
                        <div class="form">
                            <?=$cep;?>
                        </div>
                        <label>Rua</label>
                        <div class="form">
                            <?=$Logradouro;?>
                        </div>
                        
                        <label>Bairro</label>
                        <div class="form">
                            <?=$Bairro;?>
                        </div>
                        
                        <label>Cidade</label>
                        <div class="form">
                            <?=$Cidade;?>
                        </div>
                        
                        <label>Estado</label>
                        <div class="form">
                            <?=$Estado;?>
                        </div>

                        <label>DDD</label>
                        <div class="form">
                            <?=$ddd;?>
                        </div>
                        <p class="daddy-button"><a href="encontrado.txt" download="endereço" class="button">Baixar Dados</a></p>
                    </form>
                </div>
            </div>
            <div class="credits">
                <p class="daddy-button"><a class="button" href="https://kaualf.netlify.app">By: Kauã Landi</a></p>
            </div>
        </div>
    </main>

    <!-- SCRIPT -->
    <script src="/assets/scripts/font.js"></script>
    <script>
        $(document).ready(function(){
	        $(".mask-zipcode").mask("99999-999");
        });
    </script>
</body>
</html>
</php>
