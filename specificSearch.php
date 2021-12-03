<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <a class="logo" href="http://localhost:8080/konsolenkost/index.php"><img src="ebay.png" alt=""></a>
    <?php

        include "connect.php";
        include "changePrie";

        $searchword = $_GET["keyword"];
        // Get Data from Database
        $sql = "select * from ebay_item where name like '% " . $searchword . " %' limit 1;";
        $result = $mysqli->query($sql);

        // Check if there are any values in the table, display one at a time
        if ($result->num_rows > 0) {
            // output data of each row
            echo '<h4>Suchresultate für ' . $searchword . ' </h4>';
            while ($row = $result->fetch_assoc()) {
                echo    "<table><b>" .
                    "<tr><th>" .  "<br>" . $row["name"] . "</th></tr>" .
                    "<tr><th>" . "ID: " . $row["id"] . "<br>" . "</th></tr>" .
                    "<tr><th>" . " Preis: " . $row["price"] . " EUR " . "</th></tr>" .
                    "</table>"
                    .
                    "<form action='changePrice.php'>
                    Neuer Preis:
                    <input type='number' step='any' name='newprice' style='width:100px;'></input>
                    <input type='hidden' name='id' value='" . $row['id'] . "'></input>
                    <input type='hidden' name='name' value='" . $row['name'] . "'></input>
                    <input type='submit'></input>" . "</form>";
            }
        } else {
            echo "no results";
        }
        $mysqli->close();

        ?>

    <a class="back-btn" href="http://localhost:8080/konsolenkost/index.php">Zurück zur Hauptseite</a>
</body>



</html>