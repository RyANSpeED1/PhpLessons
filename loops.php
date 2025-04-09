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
        <form method="get" class="mb-3">
            <div class="mb-3">
                <input type="text" name="person" class="form-control" placeholder="Enter name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
            //loop

            //while loop
            //do while loop
            //for loop
            //foreach loop
            $x = 1;
            while ($x <= 5) {
                echo "Hello World!<br>";
                $x++;
            }
        ?>
        <?php
            $x = 1;
            do {
                echo "Hi World!<br>";
                $x++;
            } while ($x <= 5);
        ?>
        <?php
            for ($x = 0; $x <= 5; $x++) {
                echo "hey world! <br>";
            }
        ?>
        <?php
            $array = array("200", "400", "800", "1600", "3200");
            foreach ($array as $loopdata) {
                echo "I run the ".$loopdata." <br>";
            }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>