<?php
    $tipo_logradouro = "Logradouro";
?>
<!DOCTYPE html>
<html lang="pt-br" class>
<head>
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
                    <div class="form">
                        <form action="/">
                            <label for="cep">CEP</label>
                            <input required type="text" name="cep" id="cep" placeholder="00000-000">
                            <button type="submit"><i class="fas fa-search"></i>Buscar</button>
                        </form>
                        <div class="error404 off">
                            <p>Pedimos desculpas mas não consguimos encontrar esse CEP, pode ser um erro interno ou ele não exista. Verifique o CEP e tente novamente.</p>
                        </div>
                    </div>
                </div>
                <div class="board">
                    <header>
                        <p>Resultado.</p>
                    </header>
                    <form id="searched">
                        <label for="CEP">CEP</label>
                        <input type="text" name="CEP" disabled>

                        <label for="CEP"><?php echo $tipo_logradouro;?></label>
                        <input type="text" name="CEP" disabled>
                        
                        <label for="CEP">Bairro</label>
                        <input type="text" name="CEP" disabled>
                        
                        <label for="CEP">Cidade</label>
                        <input type="text" name="CEP" disabled>
                        
                        <label for="CEP">Estado</label>
                        <input type="text" name="CEP" disabled>
                        <p class="daddy-button"><a href="encontrado.txt" class="button">Baixar Dados</a></p>
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
</body>
</html>
</php>