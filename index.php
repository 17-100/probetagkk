<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <?php include "connect.php"; ?>
    <title>Display Ebay Items</title>
</head>

<body>
    <a class="logo" href="http://localhost:8080/konsolenkost/index.php"><img src="ebay.png" alt=""></a>
    <!-- Form 1 -->
    <h4>Bitte geben Sie ein Stichwort ein, nach dem gesucht werden soll</h4>
    <form action="specificSearch.php">
        <input type="text" name="keyword"><br><br>
        <input type="submit" value="Submit" onclick="los()">
        <br>
    </form>



</body>

</html>