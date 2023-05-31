<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./resources/images/favicon.webp" type="image/x-icon">
    <link rel="stylesheet" href="./css/design.css">
    <title>JOB03</title>
</head>
<body>
    <header>
        <div class="container">
            <svg viewBox="0 0 1500 350">
                <symbol id="s-text">
                    <text text-anchor="middle" x="50%" y="70%">Runtrack2 - PHP</text>
                </symbol>

                <g class="g-ants">
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                </g>
            </svg>
        </div>
        <nav>
        </nav>
    </header>
    <main>
        <h1>Runtrack2 - PHP</h1>
        <p></p>
        <h2>Jour 06 - Job 03</h2>
        <p></p>
        <h3>Consignes :</h3>
        <p>Créez une fonction nommée <strong>"getHello()"</strong>.</p>
        <p>Cette <b>fonction</b> doit retourner <em>"Hello LaPlateforme!"</em>.</p>
        <p>Appelez cette <b>fonction</b> dans votre page en récupérant sa <u>valeur de retour</u> et <u>affichez-la</u>.</p>
        <h3>Début du programme :</h3>
        <h4>Création de la fonction "getHello()"</h4>
        <?php
            function getHello() {
                return "Hello La Plateforme !";
            }
            echo getHello();
        ?>
    </main>
</body>
</html>