<?php
        $num1 = $_POST["number1"];
        $num2 = $_POST["number2"];
        $num3 = $_POST["number3"];
        $num4 = $_POST["number4"];
        $num5 = $_POST["number5"];
        echo "<p>1.&nbsp;&nbsp;9 + 10 = </p>";
        echo "<p>You answered: $num1</p>";
        echo "<p>Correct answer: 19</p><br>";
        echo "<p>2.&nbsp;&nbsp;12 x 10 = </p>";
        echo "<p>You answered: $num2</p>";
        echo "<p>Correct answer: 120</p><br>";
        echo "<p>3.&nbsp;&nbsp;12 - 10 = </p>";
        echo "<p>You answered: $num3</p>";
        echo "<p>Correct answer: 2</p><br>";
        echo "<p>4.&nbsp;&nbsp;20 / 10 = </p>";
        echo "<p>You answered: $num4</p>";
        echo "<p>Correct answer: 2</p><br>";
        echo "<p>5.&nbsp;&nbsp;3 x (4 + 5) = </p>";
        echo "<p>You answered: $num5</p>";
        echo "<p>Correct answer: 27</p><br>";
        $total = 0;
        if($num1 == "19")
        {
                $total = $total + 1;
        }
        if($num2 == "120")
        {
                $total = $total + 1;
        }
        if($num3 == "2")
        {
                $total = $total+1;
        }
        if($num4 == "2")
        {
                $total = $total+1;
        }
        if($num5 == "27")
        {
                $total = $total+1;
        }
        $percent = $total*20;
        echo "<p>You got $total problems correct!</p>";
        echo "<p>Your total score is a $percent%</p>";
?>
