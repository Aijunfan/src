<?php
$title = "Exercise 4: Control flow and loops";
include 'header.php';?>

<h2>4.2 If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, 
    decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="margin: 20px;">
    Name:<input type="text" name="name" required><br><br>
    Age:<input type="number" name="age" required><br><br>
    <input type="submit" value="Check Eligibility">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];
        if ($age >= 18) {
            $message = "Hello $name, you are eligible for voting!";
        } else {
            $message = "Sorry $name, you are not eligible for voting.";
        }

       echo "<p>$message</p>";
    }
?>

<h2>4.3 Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:</h2>
<?php
    $currentMonth = date('F'); 
    switch ($currentMonth) {
        case 'August':
            echo "It's August, so it's still holiday.";
            break;

        default:
            echo "Not August, this is $currentMonth so I don't have any holidays.";
            break;
    }
?>

<h2>4.4 For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Enter a number: <input type="number" name="number" required><br><br>
    <input type="submit" value="Multiplication Table">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        echo "<h2>Multiplication Table of $number:</h2>";
        for ($i = 1; $i <= 9; $i++) {
            $result = $number * $i;
            echo "$number x $i = $result <br>";
        }        
    }
?>

<h2>4.5 While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Enter a number: <input type="number" name="number1" required><br><br>
    <input type="submit" value="Print Numbers">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["number1"];
        $i = 1;
        while ($i <= $n) {
            echo "$i ";
            $i++;
        }
    }
?>

<h2>4.6 Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h2>
<?php
$myarray = array("HTML", "CSS", "PHP", "JavaScript");

echo "<p>Printing Elements of the Array:<p>";
foreach ($myarray as $element) {
    echo "$element<br>";
}
?>

<?php include 'footer.php';?>
