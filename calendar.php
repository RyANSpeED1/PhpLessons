<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Anything</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="styles.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Page 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Page 3</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        <?php
           $dayofweek = date("N"); 

           switch ($dayofweek) {
               case 1:
                   echo "Today is Monday!";
                   break;
               case 2:
                   echo "Today is Tuesday!";
                   break;
               case 3:
                   echo "Today is Wednesday!";
                   break;
               case 4:
                   echo "Today is Thursday!";
                   break;
               case 5:
                   echo "Today is Friday!";
                   break;
               case 6:
                   echo "Today is Saturday!";
                   break;
               case 7:
                   echo "Today is Sunday!";
                   break;
               default:
                   echo "Unknown day of the week.";
           }
        ?>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
