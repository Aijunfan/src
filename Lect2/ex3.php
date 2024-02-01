<?php
$title = "Exercise 3: Variable, Strings & Operators";
include 'header.php';?>

<h1>Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo 
    statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag.</h1>

<form class="needs-vaidation" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="mb-3">
        FirstName:<input type="text" name="firstname" required><br><br>
    </div>
    <div class="mb-3"> 
        LastName: <input type="text" name="lastname" required><br><br>
    </div>
    <div class="mb-3">
        Email: <input type="email" name="email" required><br><br>
    </div>
    <div class="mb-3">
        DOB: <input type="date" name="dob"><br><br>
    </div>
    <div class="mb-3">
        Select Color: <input type="color" name="color"><br><br>
    </div>
        <input type="submit" value="Submit">
</form>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    echo "<h3>Hello, $firstname $lastname! Your email is: $email</h3>";
}

?>


<h2>3.4 HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. 
    Note, you have already done a table in Exercise 1. If you wish, you can use the same table.</h2>

<?php
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">S.n.</th>
                <th scope="col">Name</th>
                <th scope="col">Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td><?php echo $g1 ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Alice</td>
                <td><?php echo $g2 ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bob</td>
                <td><?php echo $g3 ?></td>
            </tr>
        </tbody>
    </table>

<h2>3.5 String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). 
    Join them together and print the length of the string.</h2>
<?php
    $str1 = "Hello";
    $str2 = "World";
    $joinstr = $str1 . $str2;
    echo "Joined String: $joinstr<br>";
    $length = strlen($joinstr);
    echo "Length of the joined string: $length"; 
?>

<h2>3.6 Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables 
    to store these numbers and an echo statement to output your answer.</h2>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;
$sum = $num1 + $num2 + $num3;
echo "The sum of $num1, $num2, $num3 is $sum ";
?>   

<h2>3.7 Browser Detection: Write a PHP script to detect the browser being used to view your pages. 
    Hint: Use predefined variables: $_SERVER.</h2>
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
// echo "UserAgent: $userAgent";
if (strpos($userAgent, 'MSIE') !== false || strpos($userAgent, 'Trident/') !== false) {
    $browser = 'Internet Explorer';
} elseif (strpos($userAgent, 'Firefox') !== false) {
    $browser = 'Mozilla Firefox';
} elseif (strpos($userAgent, 'Chrome') !== false) {
    $browser = 'Google Chrome';
} elseif (strpos($userAgent, 'Opera') !== false || strpos($userAgent, 'OPR/') !== false) {
    $browser = 'Opera';
} else {
    $browser = 'Unknown';
}
echo "<br>You are using: $browser<br>";
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php include 'footer.php';?>