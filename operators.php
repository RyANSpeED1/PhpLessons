<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Anything</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tools Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Calculator</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Calendar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Converter</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php
            //arithmetic operators
            echo 6**6;
        ?>
        <br>
        <?php
            //assignment operators
            $x = 5;
            $x /= 10;
            echo $x;
        ?>
        <br>
        <?php
            //comparison operators
            $x = 5;
            $y = 10;
            if ($x <> $y) {
                echo "True";
            } else {
                echo "False";
            }
        ?>
        <br>
        <?php
            //increment/decrement operators
            $x = 5;
            echo $x--;
            echo $x;
        ?>
        <br>
        <?php
            //logical operators
            $x = 5;
            $y = 10;
            if ($x == $y xor 1 == 1) {
                echo "True";
            }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
