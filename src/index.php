<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try-Catch</title>
</head>

<body>
    <!-- validate e-mail -->
    <form action="index.php" method="POST">
        Enter email :
        <input type="text" name="email">
        <button type="submit">Check</button>
    </form>

    <?php
    $email = $_POST['email'];
    try {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("e-mail isn't valid", 1);
        } else {
            throw new Exception("email is valid", 1);
        }
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
    ?>
</body>

</html>