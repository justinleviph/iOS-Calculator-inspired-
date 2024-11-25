<?php
if (isset($_POST['expression'])) {
    $expression = $_POST['expression'];
    $result = eval('return ' . $expression . ';');
} else {
    $result = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iOS Calculator (PHP)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="calculator">
    <form method="POST" action="index.php">
        <input type="text" id="display" class="display" name="expression" value="<?= htmlspecialchars($result) ?>" disabled>
        <div class="buttons">
            <button class="btn" type="submit" name="expression" value="7">7</button>
            <button class="btn" type="submit" name="expression" value="8">8</button>
            <button class="btn" type="submit" name="expression" value="9">9</button>
            <button class="btn operator" type="submit" name="expression" value="+">+</button>

            <button class="btn" type="submit" name="expression" value="4">4</button>
            <button class="btn" type="submit" name="expression" value="5">5</button>
            <button class="btn" type="submit" name="expression" value="6">6</button>
            <button class="btn operator" type="submit" name="expression" value="-">-</button>

            <button class="btn" type="submit" name="expression" value="1">1</button>
            <button class="btn" type="submit" name="expression" value="2">2</button>
            <button class="btn" type="submit" name="expression" value="3">3</button>
            <button class="btn operator" type="submit" name="expression" value="*">*</button>

            <button class="btn" type="submit" name="expression" value="0">0</button>
            <button class="btn" type="submit" name="expression" value="C">C</button>
            <button class="btn" type="submit" name="expression" value=".">.</button>
            <button class="btn operator" type="submit" name="expression" value="/">/</button>

            <button class="btn equal" type="submit" name="expression" value="=">=</button>
        </div>
    </form>
</div>

</body>
</html>
