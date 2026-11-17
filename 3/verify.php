<?php
if (isset($_REQUEST['name']) && isset($_REQUEST['age'])) {
    $name = htmlspecialchars($_REQUEST['name']);
    $age = (int)$_REQUEST['age'];
} else {
    $name = '';
    $age = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verification Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
    </style>
</head>
<body>

    <?php
    if ($age !== null) {
        if ($age < 18) {
            echo "<h2>Hello, " . $name . " you are not authorized to visit the site</h2>";
        } else {
            echo "<h2>Welcome to this site</h2>";
        }
    } else {
        echo "<h2>No data submitted. Please enter details on the form first.</h2>";
    }
    ?>

    <p><a href="index.html">Back to Form</a></p>

</body>
</html>
