<html lang="pt-br">
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
    <main style="max-width: 400px; text-align: center;">
        <div class="to-flex" style="position: inherit;">
            <h2 id="bemvido">ADMIN</h2>
            <div class="logados-list">
                <p>
                <?php
                    $arquivo = "../assets/log-entrada.txt";
                    $fp = fopen($arquivo , "r");
                    $texto = fread($fp, filesize($arquivo));
                    fclose($fp);
                    echo $texto;
                ?>
                </p>
            </div>
        </div>
    </main>
    <script src="/assets/scripts/font.js"></script>
</body>
</html>