<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Anything</title>
</head>
<body>
    <form method="get">
        <input type="text" name="person">
        <button>submit</button>
    </form>
<?php
    $name = $_GET['person'];
    echo $name." Coach B is the best coach ever!";
?>
</body>
</html>
