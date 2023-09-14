<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form method="post" action="">
        <label for="math">Math</label>
        <input type="number" name="math" placeholder="Input your score" max="100" maxlength="3" required>
        <br><br>
        <label for="english">English</label>
        <input type="number" name="english" placeholder="Input your score" max="100" maxlength="3" required>
        <br><br>
        <label for="ict">ICT</label>
        <input type="number" name="ict" placeholder="Input your score" max="100" maxlength="3" required>
        <br><br>
        <input type="submit" value="Calclute">
    </form>

    <?php
    // input number mathods
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $math = $_POST["math"];
        $english = $_POST["english"];
        $ict = $_POST["ict"];
        $average = ($math+$english+$ict)/3;
        echo "Your Average Mark is $average"."<br>";


        // condition
        if($average>= 85){
            echo "Your Grade is A ($average)";
        }elseif($average>= 70){
            echo "Your Grade is B ($average)";
        }elseif($average>= 55){
            echo "Your Grade is C ($average)";
        }elseif($average>= 40){
            echo "Your Grade is B ($average)";
        }else{
            echo "Your Grade is D ($average)";
        }



        
    }
    ?>
</body>
</html>
