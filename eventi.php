<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <title>Eventi</title>
</head>
<body>
    <header>
        <?php
            include "./php/header.php";
        ?>
    </header>
    <div id="eventi" class="container-fluid">
        <div class="card-deck">
            <div class="card">
                <img src="./img/concerto-inverno.jpg" alt="" class="card-img-top">
                <div class="card-body">
                    <h4>Concerto estate 2019</h4>
                    <div class="descrizione">
                        <p>Il concerto d'estate 2019 si terrà il 27 luglio nel piazzale della nostra sede alle ore 21.30.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <?php
            include "./php/footer.php";
        ?>
    </footer>
</body>
</html>