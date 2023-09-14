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
        <h2>Comparison Tool</h2>
    <form method="post" action="">
        <label for="firstNumber">First Number</label>
        <input type="firstNumber" name="firstNumber" placeholder="First Number" required><br><br>
        <label for="secoundNumber">Secount Number</label>
        <input type="secoundNumber" name="secoundNumber" placeholder="Secound Number" required><br><br>
        <input type="submit" value="Check Number" class="btn-primary"><br><br>
    </form>
    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {

             $firstNumber = $_POST["firstNumber"];
             $secoundNumber = $_POST["secoundNumber"];
            
             $result= ($firstNumber > $secoundNumber) ? "First Number($firstNumber) is larger then Secound Number( $secoundNumber)" : " Secound Number( $secoundNumber) is larger then First Number($firstNumber)";
             echo $result;
    }

    ?>
    </div>
    </div>
</body>
</html>