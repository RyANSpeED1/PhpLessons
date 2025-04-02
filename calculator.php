Here’s your updated page with **Bootstrap 5**, a **navbar**, a **linked stylesheet**, and your **original PHP content preserved exactly**:

```html
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
           //conditionals
             $x = 1; 
           if ($x == 1) {
               echo "Ryan is the fastest runner!";
           }
            elseif ($x == 2) {
                 echo "Ryan Never gets injured!";
            }
            elseif ($x == 2) {
                 echo "Ryan never gives excuses!";
            }
            elseif ($x == 2) {
                 echo "Ryan always shows up to practice 30 minutes early!";
            }
            else {
                 echo "Ryan always has been the greatest runner in the world!";
            }
        ?>
        <br>
        <?php
           //switch statement
           $x = 2; 
           switch ($x) {
               case 1:
                   echo "Ryan is the fastest runner!";
                   break;
               case 2:
                   echo "Ryan Never gets injured!";
                   break;
               case 3:
                   echo "Ryan never gives excuses!";
                   break;
               case 4:
                   echo "Ryan always shows up to practice 30 minutes early!";
                   break;
               default:
                   echo "Ryan always has been the greatest runner in the world!";
           }
        ?>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

