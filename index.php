
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>PHP Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars("actions/action.php"); ?>">
        First Name: <input type="text" name="firstName">
        <br><br>
        Last Name: <input type="text" name="lastName">
        <br><br>
        Number: <input type="number" name="number">
        <br><br>
        Password: <input type="password" name="Password">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Website: <input type="text" name="website">
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <br><br>
        <input type="submit" name="submit" value="Submit">
        

    </form>



</body>

</html>