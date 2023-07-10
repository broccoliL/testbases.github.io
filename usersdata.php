<?php
$conn = mysqli_connect('localhost', 'daviti', 'datucha2003', 'userroom');

$sql = 'SELECT id, firstname, lastname, number, Password, email, website, gender, created_at FROM users';

$result = mysqli_query($conn, $sql);

$L = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn)


    // $errors = array('firstName'=>'', 'lastName'=>'', 'number'=>'','Password'=>'',"email"=>'','website'=>'');
    // if(array_filter($errors)){
    //     echo 'erroorrerr';
    // } 
    // else{
    //     header('Location: actions/action.php');
    // }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    foreach ($L as $L) {
        ?>
        <div style="display:flax">
            <p>
                <?php echo htmlspecialchars($L['id']); ?>
            </p>
            <p>
                <?php echo htmlspecialchars($L['firstname']); ?>
            </p>
            <p>
                <?php echo htmlspecialchars($L['lastname']); ?>
            </p>
            <p>
                <?php echo htmlspecialchars($L['number']); ?>
            </p>
            <p>
                <?php echo htmlspecialchars($L['Password']); ?>
            </p>
            <p>
                <?php echo htmlspecialchars($L['email']); ?>
            </p>
            <p>
                <?php echo htmlspecialchars($L['website']); ?>
            </p>
            <p>
                <?php echo htmlspecialchars($L['gender']); ?>
            </p>
            <p>
                <?php echo htmlspecialchars($L['created_at']); ?>
            </p>
        </div>
        <?php
    }
    ?>
</body>
</html>