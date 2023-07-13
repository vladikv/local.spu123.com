<?php
$ID="";


if($_SERVER['REQUEST_METHOD']=="GET") {
    if(isset($_GET['id'])){
        include $_SERVER["DOCUMENT_ROOT"] . '/connection_database.php';
        $ID=$_GET['id'];
        $sql = "DELETE FROM users WHERE users.id=ID";
        if(isset($dbh)) {
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            header('Location: /');
            exit;
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Видалити користувача</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/site.css">
</head>
<body>
<?php include $_SERVER["DOCUMENT_ROOT"].'/navbar.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"].'/connection_database.php'; ?>
<div class="container">
    <h1 class="text-center">Видалити користувача</h1>
    <form class="col-md-8 offset-md-2" method="get">
        <div class="mb-3">
            <label for="id" class="form-label">Іd</label>
            <input type="number" class="form-control" id="id" name="id">
        </div>
        <button type="submit" class="btn btn-primary">Видалити</button>
    </form>
</div>


<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
