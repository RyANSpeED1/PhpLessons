<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Anything</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional Custom Stylesheet -->
    <link href="styles.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Page 2</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Page 3</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Form Section -->
    <div class="container">
        <form method="get" class="mb-3">
            <div class="mb-3">
                <input type="text" name="person" class="form-control" placeholder="Enter name" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
            if (isset($_GET['person'])) {
                $person = htmlspecialchars($_GET['person']);
                echo "<div class='alert alert-success'>Hello, <strong>$person</strong>!</div>";
            }
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
