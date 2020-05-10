<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Future Value Calculator</h1>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" METHOD="post">
    <label>Investment Amount:</label>
    <input type="text" name="investment" value="0"><br>
    <label>Yearly Interest Rate:</label>
    <input type="text" name="rate" value="0"><br>
    <label>Numbers of Year:</label>
    <input type="text" name="year" value="0"><br>
    <input type="submit" value="Calculator"><br>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $investment=$_POST["investment"];
    $rate=$_POST["rate"];
    $year=$_POST["year"];
    $result = $investment + $year*($investment*$rate/100);
    echo $result;
}

?>
</body>
</html>
