<?php
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
            <header>
                <h2>Bem vindo.</h2>
                <p>Busque aqui.</p>
            </header>
            <div class="form">
                <form action="/">
                    <label for="cep">CEP</label>
                    <input required type="text" name="cep" id="cep" placeholder="00000-000">
                    <button type="submit"><i class="fas fa-sign-in-alt"></i>Entrar</button>
                </form>
                <form id="searched">
                    <label for="CEP">CEP</label>
                    <input type="text" name="CEP" value="dsfs" disabled>

                    <label for="CEP"><?$tipo_logradouro?></label>
                    <input type="text" name="CEP" disabled>
                    
                    <label for="CEP">Bairro</label>
                    <input type="text" name="CEP" disabled>
                    
                    <label for="CEP">Cidade</label>
                    <input type="text" name="CEP" disabled>
                    
                    <label for="CEP">Estado</label>
                    <input type="text" name="CEP" disabled>
                    <a href="encontrado.txt" class="button">Baixar Dados</a>
                </form>
                <div class="credits">
                    <p><a href="https://kaualf.netlify.app">By: Kauã Landi</a></p>
                </div>
            </div>
        </div>
    </main>

    <!-- SCRIPT -->
    <script src="/assets/scripts/font.js"></script>
</body>
</html>
</php>