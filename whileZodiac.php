<!DOCTYPE html>
<html>
<head>
    <!--Name: Custodio, Archie D.
    Section: WD - 201-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>whileZodiac</title>
    <style>
        table {
            text-align: center;
            margin: auto;
            border: solid;
        }
        td {
            border-width: 10px;
            width: 50px;
            height: 30px;
            border: solid;
        }
    </style>
</head>
<body>
    <h1>Chinese Zodiac while loop</h1>
    <?php
    $SignNames = array(
        "Rat",
        "Ox",
        "Tiger",
        "Rabbit",
        "Dragon",
        "Snake",
        "Horse",
        "Goat",
        "Monkey",
        "Rooster",
        "Dog",
        "Pig",
    );

    echo "<table>\n";
    echo "<tr>\n";

    $i = 0;
    while ($i < 12) {
        echo "<th>" . $SignNames[$i] . "<br />\n";
        ++$i;
    }

    $i = 1912;
    while ($i <= 2023) {
        if ((($i - 1912) % 12) == 0) {
            echo "</tr>\n";
            echo "<tr>\n";
        }
        echo "<td>$i</td>\n";
        ++$i;
    }

    echo "</tr>\n";
    echo "</table>\n";
    ?>
</body>
</html>
