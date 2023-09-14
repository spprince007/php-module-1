<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="">
            <h2>Simple Calculator</h2>
            <form method="post" action="">
                <label for="number1">Number One</label>
                <input type="number" name="number1" required>
                <br>
                <label for="number2">Number Two</label>
                <input type="number" name="number2" required>
                <br>
                <label for="operation">Select the operation</label>
                <select name="operation">
                    <option value="add">add</option>
                    <option value="subtract">subtract</option>
                    <option value="multiply">multiply</option>
                    <option value="divide">divide</option>
                </select>
                <br>
                <input type="submit" value="Calculate">
            </form>

            <?php
            $number1 = $num2 = $operation = $result = "";

        

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number1 = $_POST["number1"];
                $number2 = $_POST["number2"];
                $operation = $_POST["operation"];

                if ($operation == "add") {
                    $result = $number1 + $number2;
                } elseif ($operation == "subtract") {
                    $result = $number1 - $number2;
                } elseif ($operation == "multiply") {
                    $result = $number1 * $number2;
                } elseif ($operation == "divide") {
                    if ($number2 == 0) {
                        $result = "Cannot divide by zero";
                    } else {
                        $result = $number1 / $number2;
                    }
                } else {
                    $result = "Invalid operation";
                }
            }
            ?>
            <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<h2>Result:</h2>";
                echo "<p>$number1 ";
                if ($operation == "add") {
                    echo "+";
                } elseif ($operation == "subtract") {
                    echo "-";
                } elseif ($operation == "multiply") {
                    echo "*";
                } elseif ($operation == "divide") {
                    echo "/";
                }
                echo " $number2 = $result</p>";
            }
            ?>
        </div>
    </div>
</body>

</html>