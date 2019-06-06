<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <title>I nostri corsi</title>
    <style>
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: end;
        }
    </style>
</head>
<body>
    <header>
        <?php
        include "./php/header.php";
        ?>
    </header>
    <div id="corsi" class="container-fluid">
        <div class="card-deck" style="margin-top: 15px">
            <div id="clarinetto" class="card">
                <img src="./img/clarinetto.jpeg" alt="Clarinetto" class="card-img-top img-fluid">
                <div class="card-body">
                    <h4>Clarinetto</h4>
                </div>
            </div>
            <div id="flauto-ottavino" class="card">
                <img src="./img/flauto-ottavino.jpeg" alt="Flauto e ottavino" class="card-img-top img-fluid">
                <div class="card-body">
                    <h4>Flauto e ottavino</h4>
                </div>
            </div>
            <div id="sassfono" class="card">
                <img src="./img/sassofono.jpeg" alt="Sassofono" class="card-img-top img-fluid">
                <div class="card-body">
                    <h4>Sassofono</h4>
                </div>
            </div>
            <div id="ottoni" class="card">
                <img src="./img/ottoni.jpeg" alt="Ottoni" class="card-img-top img-fluid">
                <div class="card-body">
                    <h4>Ottoni</h4>
                </div>
            </div>
        </div>
        <div class="card-deck" style="margin-top: 15px">
            <div id="pianoforte" class="card">
                <img src="./img/pianoforte.jpeg" alt="Pianoforte" class="card-img-top img-fluid">
                <div class="card-body">
                    <h4>Pianoforte</h4>
                </div>
            </div>
            <div id="percussioni" class="card">
                <img src="./img/percussioni.jpeg" alt="Batteria e percussioni" class="card-img-top img-fluid">
                <div class="card-body">
                    <h4>Batteria e percussioni</h4>
                </div>
            </div>
            <div id="canto" class="card">
                <img src="./img/canto.jpeg" alt="Canto" class="card-img-top img-fluid">
                <div class="card-body">
                    <h4>Canto</h4>
                </div>
            </div>
            <div id="chitarra" class="card">
                <img src="./img/chitarra.jpeg" alt="Chitarra" class="card-img-top img-fluid">
                <div class="card-body">
                    <h4>Chitarra</h4>
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