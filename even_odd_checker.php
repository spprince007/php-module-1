<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Even of Odd Number</h2>
    <form method="post" action="">
        <label for="number">Number</label>
        <input type="number" name="number" required><br><br>
        <input type="submit" value="Check Number" class="btn-primary"><br><br>
    </form>
    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {

             $number = $_POST["number"];
             
            //  echo $number;
             $result = $number % 2;

          if($result==0){
            echo "$number is a Even No";
          }else{
            echo "$number is a Odd No";
        }
    }

    

    ?>
    </div>
</body>
</html>