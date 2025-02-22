<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">


        <h1>Server Information</h1>
        <p><strong>Server Name:</strong> <?php echo $_SERVER['SERVER_NAME']; ?></p>
        <p><strong>Server Software:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
        <p><strong>Client IP Address:</strong> <?php echo $_SERVER['REMOTE_ADDR']; ?></p>



    </div>
</body>

</html>