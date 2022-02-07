<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Calculator</title>


</head>


<body>

    <div class="container">

        <form>
            <input type="text" name="num1" placeholder="number 1">
            <input type="text" name="num2" placeholder="number 2">
            <select name="operator">
                <option>None</option>
                <option>Add</option>
                <option>Sub</option>
                <option>Mul</option>
                <option>Div</option>
            </select>
            <br>
            <button name="submit" type="submit" value="submit">Calculate</button>
        </form>
        <p>
            the answer is:
        </p>


<?php
//php calculator
 if (isset($_GET['submit']))
 {
     $result1 = $_GET['num1'];
     $result2 = $_GET['num2'];
     $operator = $_GET['operator'];

     switch($operator)
     {
         case "None":
            echo "you need to select a method";
            break;
            case "Add":
                echo $result1 + $result2;
            break;
            case "Sub":
                echo $result1 - $result2;
            break;
            case "Mul":
                echo $result1 * $result2;
            break;
            case "Div":
                echo $result1 / $result2;
     }

 }

?>

    </div>


</body>



</html>