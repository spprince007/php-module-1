<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>
    <form method="post" action="">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" required>
        <br>
        <label for="direction">Select Conversion Direction:</label>
        <select name="direction">
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>
        <br>
        <input type="submit" value="Convert">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $direction = $_POST["direction"];

        // Perform the temperature conversion
        if ($direction === "celsius_to_fahrenheit") {
            $result = ($temperature * 9/5) + 32;
            echo "<p>{$temperature} &deg;C is equal to {$result} &deg;F</p>";
        } elseif ($direction === "fahrenheit_to_celsius") {
            $result = ($temperature - 32) * 5/9;
            echo "<p>{$temperature} &deg;F is equal to {$result} &deg;C</p>";
        }
    }
    ?>
</body>
</html>
