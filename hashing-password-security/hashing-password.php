<?php
$hash = "";

if (isset($_POST["submit"])) {
    $pass = $_POST["password"];
    $hash = password_hash($pass, PASSWORD_DEFAULT);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Hashing</title>
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #1C6D6DFF, #0F0604FF);
            padding: 20px;
        }

        .container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
            color: white;
        }

        h3 {
            margin-bottom: 15px;
            font-size: 22px;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 6px;
            text-align: left;
        }

        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            outline: none;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            transition: 0.3s;
        }

        input[type="password"]::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        input[type="password"]:focus {
            background: rgba(255, 255, 255, 0.3);
            outline: 2px solid white;
        }

        button {
            background: #0C423BFF;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
            font-weight: bold;
        }

        button:hover {
            background: #0D6357FF;
            ;
        }

        .result {
            margin-top: 15px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 6px;
            font-size: 14px;
            word-break: break-word;
            color: white;
            text-align: left;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h3>🔒 Hashing Password Encryption</h3>
        <form action="" method="post">
            <label for="password">Enter Password:</label>
            <input type="password" name="password" id="password" placeholder="Type your password..." required>
            <button type="submit" name="submit">Encrypt Password</button>
        </form>

        <?php if (!empty($hash)): ?>
            <div class="result">
                <strong>Encrypted Pass:</strong> <?php echo $hash; ?>
            </div>
        <?php endif; ?>
    </div>

</body>

</html>