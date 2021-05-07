<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>test</title>
</head>
<body>

<?php
    $radio = $select = $checkbox = $text = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["radio"]))
            $radio = $_POST["radio"];
        if (!empty($_POST["select"]))
            $select = $_POST["select"];
        if (!empty($_POST["checkbox"]))
            $checkbox = implode(",", $_POST["checkbox"]);
        if (!empty($_POST["text"]))
            $text = $_POST["text"];
    }
?>

<h2>作業五</h2>
<form method="post">
    Radio: 
    <input type="radio" name="radio" value="A">A
    <input type="radio" name="radio" value="B">B
    <input type="radio" name="radio" value="C">C
    <input type="radio" name="radio" value="D">D
    <br><br>
    Select: 
    <select name="select">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select>
    <br><br>
    Checkbox: 
    <input type="checkbox" name="checkbox[]" value="A">A
    <input type="checkbox" name="checkbox[]" value="B">B
    <input type="checkbox" name="checkbox[]" value="C">C
    <input type="checkbox" name="checkbox[]" value="D">D
    <br><br>
    Text: <input type="text" name="text">
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
    echo "<h2>您輸入的内容是:</h2>";
    echo "Radio: ".$radio;
    echo "<br>";
    echo "Select: ".$select;
    echo "<br>";
    echo "Checkbox: ".$checkbox;
    echo "<br>";
    echo "Text: ".$text;
?>

</body>
</html>
