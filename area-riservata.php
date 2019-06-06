<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/area-riservata.css">
    <title>Area riservata</title>
</head>
<body>
    <header>
        <?php
        include './php/header.php';
        ?>
    </header>
    <div id="login" class="container">
        <form method="post" action="area-riservata.php">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="float: left">Login</h4>
                </div>
                <div class="card-body">
                    <div id="usernameDiv" class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div id="passwordDiv" class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-outline-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
    <footer>
        <?php
        include './php/footer.php';
        ?>
    </footer>
</body>
</html>