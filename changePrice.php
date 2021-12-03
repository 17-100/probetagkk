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


    $id = $_GET["id"];
    $newprice = $_GET["newprice"];
    $name = $_GET['name'];
    // echo $newprice . "<br>";
    // echo $id;


    $sql = "update ebay_item set price=" . $newprice . " where id=" . $id . ";";
    $result = $mysqli->query($sql);
    echo "<h4>Der Preis wurde erfolgreich geändert!</h4>";
    echo    "<table><b>" .
        "<tr><th>" .  "<br>" . $name . "</th></tr>" .
        "<tr><th>" . "ID: " . $id . "<br>" . "</th></tr>" .
        "<tr><th>" . " Preis: " . $newprice . " EUR " . "</th></tr>" .
        "</table>";
    ?>

    <a class="back-btn" href="http://localhost:8080/konsolenkost/index.php">Zurück zur Hauptseite</a>

</body>

</html>