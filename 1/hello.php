<?php
session_start();

// Store name and start time in session when submitted from form
if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['start_time'] = time();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        /* Start time at the right top corner of the page */
        .top-right {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 14px;
            font-weight: bold;
        }
        input[type="submit"] {
            padding: 6px 14px;
            font-size: 14px;
            cursor: pointer;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<?php if (isset($_SESSION['name'])): ?>
    <div class="top-right">
        Start Time: <?php echo date("h:i:s A", $_SESSION['start_time']); ?>
    </div>

    <h2>Hello, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h2>

    <form action="logout.php" method="POST">
        <input type="submit" value="Logout">
    </form>
<?php else: ?>
    <h2>No active session found.</h2>
    <p><a href="index.php">Go to Login</a></p>
<?php endif; ?>

</body>
</html>
