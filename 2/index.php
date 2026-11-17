<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Current Date, Time and Day</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
    </style>
</head>
<body>

    <h2>Current Date, Time and Day</h2>

    <?php
    date_default_timezone_set('Asia/Kolkata');

    $day  = date("l");
    $date = date("d-m-Y");
    $time = date("h:i:s A");

    echo "<p><strong>Day:</strong> " . $day . "</p>";
    echo "<p><strong>Date:</strong> " . $date . "</p>";
    echo "<p><strong>Time:</strong> " . $time . "</p>";
    ?>

</body>
</html>
