<?php
session_start();

$hasSession = isset($_SESSION['name']) && isset($_SESSION['start_time']);

if ($hasSession) {
    $name = $_SESSION['name'];
    $duration = time() - $_SESSION['start_time'];
    session_unset();
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
    </style>
</head>
<body>

<?php if ($hasSession): ?>
    <h2>Thank You, <?php echo htmlspecialchars($name); ?>!</h2>
    <p>Duration of usage: <?php echo $duration; ?> seconds</p>
<?php else: ?>
    <h2>No active session to logout from.</h2>
<?php endif; ?>

    <p><a href="index.php">Login Again</a></p>

</body>
</html>
