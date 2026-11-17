<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Lab 10(a)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        form {
            margin-top: 15px;
        }
        input[type="text"] {
            padding: 6px;
            font-size: 14px;
        }
        input[type="submit"] {
            padding: 6px 14px;
            font-size: 14px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>Login Page</h2>
    <form action="hello.php" method="POST" onsubmit="let p=location.pathname; if(!p.endsWith('.php')&&!p.endsWith('.html')&&!p.endsWith('/')) this.action=p+'/hello.php';">
        <label for="name">Enter Name:</label>
        <input type="text" id="name" name="name" required>
        <input type="submit" value="Submit">
    </form>

</body>
</html>
