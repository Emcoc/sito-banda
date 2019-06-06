<div id="carosello">
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/concerto-inverno.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/concerto-inverno2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/pentagramma-ennio-porrino.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/header.css">
</div>

<div id="nav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item
                <?php
                    if($_SERVER["REQUEST_URI"] == "/sito-banda/index.php") {
                        ?>
                        active
                        <?php
                    }
                ?>">
                    <a class="nav-link" href="./index.php">Home</a>
                </li>
                <li class="nav-item
                <?php
                if($_SERVER["REQUEST_URI"] == "/sito-banda/chi-siamo.php") {
                    ?>
                        active
                        <?php
                }
                ?>">
                    <a class="nav-link" href="./chi-siamo.php">Chi siamo</a>
                </li>
                <li class="nav-item
                <?php
                if($_SERVER["REQUEST_URI"] == "/sito-banda/corsi.php") {
                    ?>
                        active
                        <?php
                }
                ?>">
                    <a class="nav-link" href="./corsi.php">I nostri corsi</a>
                </li>
                <li class="nav-item
                <?php
                if($_SERVER["REQUEST_URI"] == "/sito-banda/eventi.php") {
                    ?>
                        active
                        <?php
                }
                ?>">
                    <a class="nav-link" href="./eventi.php">Eventi</a>
                </li>
                <li class="nav-item
                <?php
                if($_SERVER["REQUEST_URI"] == "/sito-banda/galleria.php") {
                    ?>
                        active
                        <?php
                }
                ?>">
                    <a class="nav-link" href="./galleria.php">Galleria</a>
                </li>
                <li class="nav-item
                <?php
                if($_SERVER["REQUEST_URI"] == "/sito-banda/contattaci.php") {
                    ?>
                        active
                        <?php
                }
                ?>">
                    <a class="nav-link" href="./contattaci.php">Contattaci</a>
                </li>
                <li class="nav-item
                <?php
                if($_SERVER["REQUEST_URI"] == "/sito-banda/area-riservata.php") {
                    ?>
                        active
                        <?php
                }
                ?>">
                    <a class="nav-link" href="./area-riservata.php">Area riservata</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="./search.php">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>