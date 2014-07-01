<?php
try {
    $dbh = new PDO('mysql:host=mmww.webair.com;dbname=14183_loancentro', '14183_jellanlc', 'qu1t0s');
    foreach($dbh->query('SELECT * from user') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>