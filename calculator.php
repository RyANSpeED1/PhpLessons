<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h2>PHP Calculator</h2>
    <form method="post" action="">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">−</option>
            <option value="multiply">×</option>
            <option value="divide">÷</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = '';

        if (is_numeric($num1) && is_numeric($num2)) {
            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 == 0) {
                        $result = 'Error: Cannot divide by zero.';
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                default:
                    $result = 'Invalid operation selected.';
                    break;
            }
            echo "<h3>Result: $result</h3>";
        } else {
            echo '<h3>Error: Please enter valid numbers.</h3>';
        }
    }
    ?>
</body>
</html>
