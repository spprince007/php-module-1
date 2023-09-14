<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="">
        <h2>Weather Report</h2>
    <form method="post" action="">
        <label for="temperature">Temperature</label>
        <input type="temperature" name="temperature" placeholder="put the temperature in celcious" required><br><br>
        <input type="submit" value="Check Weather" class="btn-primary"><br><br>
    </form>
    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {

             $temperature = $_POST["temperature"];
            
             if ($temperature < 0) {
                echo "It's freezing!";
            } elseif ($temperature >= 0 && $temperature < 15) {
                echo "It's cool.";
            } elseif ($temperature >= 15 && $temperature < 25) {
                echo "It's warm.";
            } else {
                echo "It's hot!";
            }
    }

    

    ?>
    </div>
    </div>
</body>
</html>