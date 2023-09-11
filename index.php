<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <style>
        <?php
        include 'style.css';
         ?>
    </style>
</head>
<body>
    <div class="container">
        <h2>Basic Calculator</h2>
        <form action="" method="post">
            <input type="number" name="num1" placeholder="Input Your Number" required>
            <input type="number" name="num2" placeholder="Input Your Number" required>
            <select name="operation" required>
                <!-- <option selected>Select Operator</option> -->
                <option value="add">Addition</option>
                <option value="subtraction">Subtraction</option>
                <option value="multiplication">Multiplication</option>
                <option value="division">Division</option>
                <option value="modulus">Modulus</option>
            </select>
            <button type="submit">Result</button>
        </form>
        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];

                switch ($operation) {
                    case 'add':
                        $result = $num1+$num2;
                        echo "Addition Result: <h2>$result</h2>";
                        break;
                    
                    case 'subtraction':
                        $result = $num1 - $num2;
                        echo "Subtraction Result: <h2>$result</h2>";
                        break;

                    case 'multiplication':
                        $result = $num1 * $num2;
                        echo "Multiplication Result: <h2>$result</h2>";
                        break;
                    
                    case 'division':
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                            echo "Division Result: <h2>$result</h2>";
                        }
                        else{
                            echo "Why Zero?";
                        }
                        break;
                    case 'modulus':
                        $result = $num1 % $num2;
                        echo "Modulus Result: <h2>$result</h2>";
                        break;
                    default:
                        echo "No Result";
                        break;
                }
    
            }


            ?>
        </div>
    </div>
</body>
</html>