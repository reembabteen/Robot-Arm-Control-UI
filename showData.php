<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Show Data</title>
</head>
<style>
    body {
        background-color: lightblue;
    }

    h1 {
        color: white;
        font-size: 30px;
        margin-top: 20px;
        margin-left: 20px;
    }
</style>

<body>

    <h1>Show Data</h1>

</body>

</html>

<?php
$connection = mysqli_connect("localhost", "root", "", "control");
if (!$connection) {
    die("Database connection failed");
}


$query = "SELECT * FROM data";
$result = mysqli_query($connection, $query);
if (!$result) {
    die('Query FAILED' . mysqli_error($connection));
}


while ($row = mysqli_fetch_assoc($result)) {
    echo "<br>";
    echo '<div style= " font-family: verdana; font-size: 15px; margin-left: 20px;">' .
        "Engine 1: " . $row['Engine1'] . "<br>" .  "<br>" .
        "Engine 2: " . $row['Engine2'] . "<br>" .  "<br>" .
        "Engine 3: " . $row['Engine3'] . "<br>" .  "<br>" .
        "Engine 4: " . $row['Engine4'] . "<br>" .  "<br>" .
        "Engine 5: " . $row['Engine5'] . "<br>" .  "<br>" .
        "Engine 6: " . $row['Engine6'] . "<br>" .  "<br>" .
        '</div>';
}

?>