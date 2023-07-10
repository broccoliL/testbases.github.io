<?php
// define variables and set to empty values
$firstName = $lastName = $email = $gender = $website = "";

$firstName = test_input($_POST["firstName"]);
$lastName = test_input($_POST["lastName"]);
$number = test_input($_POST["number"]);
$Password = test_input($_POST["Password"]);
$email = test_input($_POST["email"]);
$website = test_input($_POST["website"]);
$gender = test_input($_POST["gender"]);

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myfile = fopen($firstName, "a") or die("Unable to open file!");
    $txt = "First Name: " . $firstName . "\n";
    $txt .= "Last Name: " . $lastName . "\n";
    $txt .= "Number: " . $number . "\n";
    $txt .= "Password: " . $Password . "\n";
    $txt .= "Email: " . $email . "\n";
    $txt .= "Website: " . $website . "\n";
    $txt .= "Gender: " . $gender . "\n";
    // fwrite($myfile, $data . PHP_EOL);
    fwrite($myfile, $txt);
    fclose($myfile);
    
}


function userGreetings($userName){
  echo "<p> მოგესალმებით ბატონო $userName </p>";
}

userGreetings($firstName);

echo "<a href='../usersdata.php'>sfs</a>";


// echo "<h2>Your Input:</h2>";
// echo $firstName;
// echo "<br>";
// echo $lastName;
// echo "<br>";
// echo $number;
// echo "<br>";
// echo $Password;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo $website;
// echo "<br>";
// echo $gender;


$servername = "localhost";
$username = "daviti";
$password = "datucha2003";
$dbname = "userroom";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO users (firstname, lastname, number, Password, email, website, gender)
  VALUES ('$firstName', '$lastName','$number','$Password','$email','$website','$gender')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>