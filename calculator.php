<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shri-Calculator</title>
</head>
<body>
    <div><form method="get" id="f1" action="calculator.php">
        <h1>Shri-Calculator</h1>
        First number : <input type="number" step="any" name="txt1"><br><br>
        Second number: <input type="number" step="any" name="txt2"><br><br>
        <input type="submit" value="Add" name="op">
        <input type="submit" value="Subtract" name="op">
        <input type="submit" value="Multiply" name="op">
        <input type="submit" value="Divide" name="op"><br><br>
    </form></div>
    <?php
    $txt1 = $_GET["txt1"];
    $txt2 = $_GET["txt2"];
    $op = $_GET["op"];
    switch($op){
        case "Add":
        $res = $txt1+$txt1;
        break;
        case "Subtract":
        $res = $txt1-$txt2;
        break;
        case "Multiply":
        $res = $txt1*$txt2;
        break;
        case "Divide":
        $res = $txt1/$txt2;
        break;
        default:
        $res = "Error";
        break;
    }
    echo "The result is $res";
    ?>
</body>
</html>