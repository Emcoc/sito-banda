<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/contattaci.css">
    <title>Contattaci</title>
</head>
<body>
    <header>
        <?php
            include "./php/header.php";
        ?>
    </header>
    <div id="contattaci" class="container">
        <form action="contattaci.php" method="post">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mt-2" style="float: left;">Contattaci</h3>
                </div>
                <div class="card-body">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="nome">Cognome</label>
                            <input type="text" class="form-control" id="cognome" name="cognome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div><br>
                        <div class="form-group">
                            <label for="contenuto">Contenuto</label>
                            <textarea class="form-control" id="contenuto" rows="3" name="contenuto" required></textarea>
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-outline-primary" style="float: right">Invia</button>
                </div>
            </div>
        </form>
    </div>
    <footer>
        <?php
            include "./php/footer.php";
        ?>
    </footer>
    <?php
        /*if(isset($_POST["submit"])) {
            if(mail("ema.cocco.00@gmail.com", "contattaci", $_POST["contenuto"] . $_POST["nome"] . $_POST["cognome"])) {
                echo "true";
            } else echo "false";
        }*/
    ?>
</body>
</html>