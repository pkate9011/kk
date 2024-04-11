<!DOCTYPE html>
<html>
<head>
<title>Number Operations</title>
</head>
<body>
<h1>Number Operations</h1>
<?php
// define variables and set to empty values
$num = $op = "";
If ($_SERVER["REQUEST_METHOD"] == "POST") {
$num = test_input($_POST["num"]);
$op = test_input($_POST["op"]);
// perform operation based on user’s choice
Switch ($op) {
Case "fib":
$result = fibonacci($num);
Echo "<p>The Fibonacci series of $num numbers is: $result</p>";
Break;
Case "sum":
$result = sumOfDigits($num);Echo "<p>The sum of digits in $num is: $result</p>";
Break;
Default:
Echo "<p>Invalid operation selected</p>";
}
}
Function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
Return $data;
}
Function fibonacci($num) {
$first = 0;
$second = 1;
$result = "";
For ($i = 0; $i < $num; $i++) {
$result .= $first . " ";
$third = $first + $second;
$first = $second;
$second = $third;
}
Return $result;
}Function sumOfDigits($num) {
$sum = 0;
While ($num > 0) {
$digit = $num % 10;
$sum += $digit;
$num = (int)($num / 10);
}
Return $sum;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label for="num">Enter a number:</label>
<input type="number" name="num" id="num" required>
<br><br>
<label for="op">Select an operation:</label>
<select name="op" id="op" required>
<option value="">--Select--</option>
<option value="fib">Fibonacci Series</option>
<option value="sum">Sum of Digits</option>
</select>
<br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>
