
<?php
include  $_SERVER["DOCUMENT_ROOT"].'/config.php';


try {
    // створюємо зміну для роботи з базою даних
    $dbh = new PDO(DB_DRIVER.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";//виводить помилку на екран
    die(); //закінчує роботу програми з помилкою

}
