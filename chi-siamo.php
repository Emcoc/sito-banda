<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <title>Chi siamo</title>
    <style>
        #maestri img {
            border-bottom-left-radius: 50%;
            border-bottom-right-radius: 50%;
        }
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: end;
        }
        #dove-siamo iframe{
            margin-top: 5px;
            width: 100%;
        }
        #dove-siamo, #maestri {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <header>
        <?php
            include "./php/header.php";
        ?>
    </header>
    <div id="storia" class="container-fluid">
        <h2>La nostra storia</h2>
        <p>La banda musicale Ennio Porrino nasce nel 1970.</p>
    </div>
    <div id="maestri" class="container-fluid">
        <h2>I nostri insegnanti</h2>
        <div class="card-deck">
            <div id="giuliano" class="card">
                <img src="img/giuliano.jpg" class="card-img-top" alt="Giuliano Cocco">
                <div class="card-body">
                    <h4 class="card-title">Giuliano</h4>
                    <p class="card-text">Diplomato in corno francese al Conservatorio "Giovanni Pierluigi da Palestrina" di Cagliari, Giuliano è il direttore artistico della banda musicale nonché il maestro degli ottoni</p>
                </div>
            </div>
            <div id="arianna" class="card">
                <img src="img/arianna.jpg" class="card-img-top" alt="Arianna Cocco">
                <div class="card-body">
                    <h4 class="card-title">Arianna</h4>
                    <p class="card-text">Diplomata in flauto traverso al Conservatorio "Luigi Canepa" di Sassari, Arianna è la maestra di flauto e si occupa dei corsi di propedeutica musicale</p>
                </div>
            </div>
            <div id="giorgia" class="card">
                <img src="img/giorgia.jpg" class="card-img-top" alt="Giorgia Atzeni">
                <div class="card-body">
                    <h4 class="card-title">Giorgia</h4>
                    <p class="card-text">Diplomata in clarinetto al Conservatorio "Giovanni Pierluigi da Palestrina" di Cagliari, Giorgia è la maestra degli strumenti ad ancia</p>
                </div>
            </div>
            <div id="valentino" class="card">
                <img src="img/valentino.jpg" class="card-img-top" alt="Valentino Serafini">
                <div class="card-body">
                    <h4 class="card-title">Valentino</h4>
                    <p class="card-text">Diplomato in organo e composizione e laureando in pianoforte al Conservatorio "Giovanni Pierluigi da Palestrina" di Cagliari, Valentino è il maestro di pianoforte</p>
                </div>
            </div>
            <div id="tiziano" class="card">
                <img src="img/tiziano.jpg" alt="Tiziano Dessì" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Tiziano</h4>
                    <p class="card-text">Il nostro insegnante di chitarra</p>
                </div>
            </div>
        </div>
        <div class="card-deck">

        </div>
    </div>
    <div id="dove-siamo" class="container-fluid">
        <h2>Dove siamo</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d773.9803426879419!2d8.524625040464429!3d39.108260265640844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e707212ba2a341%3A0x1e6570bde7430438!2sVia+Giuseppe+di+Vittorio%2C+09010+San+Giovanni+Suergiu+CI!5e0!3m2!1sit!2sit!4v1559816034391!5m2!1sit!2sit" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <footer>
        <?php
            include "./php/footer.php";
        ?>
    </footer>
</body>
</html>