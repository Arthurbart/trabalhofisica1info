<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultados:</h1>
    </header>
    <main>
        <?php 
            $tempo = $_GET["Tempo"];
            const GRAV_DIV_P2 = 5;
            $PosIni = GRAV_DIV_P2 * $tempo * $tempo;
            echo "<p>Se desconsiderarmos algumas Leis de Newton, teoricamente seu movel tera partido do ponto de <strong>$PosIni m!</strong>";
            echo "<p><strong>Sensacional! 🚀🚀🚀</strong>";
        ?>
        <p><a href="javascript:history.go(-1)"><strong>Voltar para a pagina anterior.</strong></a></p>
    </main>
</body>
</html>