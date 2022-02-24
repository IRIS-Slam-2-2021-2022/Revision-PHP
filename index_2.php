<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>IRIS</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
    table, td, tr {
        border: 1px solid black;
    }
</style>
<body>

<h1>Question 1</h1>
<table>

<?php

error_reporting(E_ALL & ~E_NOTICE);
ini_set('error_reporting', E_ALL);
try {

    $dbh = new PDO('mysql:host=db;dbname=employee', 'root', 'root');

    $stmt = $dbh->prepare('SELECT * FROM employees');
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


    if (count($results) > 0) {
        $firstResult = $results[0];
        $headers = array_keys($firstResult);
        ?>
        <thead>
        <tr>
            <?php
                foreach ($headers as $header) {
                    ?> <td> <?php echo $header ?> </td> <?php
                }
            ?>
        </tr>
        </thead>
        <?php
               
        foreach($results as $row) {
            ?> <tr>
            <?php foreach ($row as $key => $value) {
                ?> <td> <?php echo $value; ?> </td> <?php
            }
        ?>
    </tr>
    <?php
        }
    }

    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>
        </table>
</body>
</html>