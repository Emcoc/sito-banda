<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <title>Galleria</title>
</head>
<body>
    <header>
        <?php
            include "./php/header.php";
        ?>
    </header>
    <div id="gallery">
        <?php
            include "./php/config.php";
            $result = $conn->query("SELECT count(*) FROM evento;");
            print_r($result->fetch_assoc());
        ?>
    </div>
    <footer>
        <?php
            include "./php/footer.php";
        ?>
    </footer>
</body>
</html>