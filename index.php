<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/site.css">
</head>
<body>
    <!--вставляємо панель навігації-->
    <?php include $_SERVER["DOCUMENT_ROOT"].'/navbar.php'; ?>
    <!--вставляємо створений інтерфейс для роботи з базою даних-->
    <?php include $_SERVER["DOCUMENT_ROOT"].'/connection_database.php'; ?>
    <div class="container">
        <h1>Список користувачів</h1>
        <a href="/create.php" class="btn btn-success">Додати</a>
        <a href='/delete.php' class='btn btn-danger'>Видалити</a>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT id, name, email, image FROM users;";
                //перевіряємо чи існує змінна
                if(isset($dbh)) {
                    $stm = $dbh->query($sql);
                    foreach ($stm as $row) {
                        $id = $row["id"];
                        $name = $row["name"];
                        $email = $row["email"];
                        $image = $row["image"];
                        echo "
                            <tr>
                                <th scope='row'>$id</th>  
                                <td><img src='$image' width='50' /></td>
                                <td>$name</td>
                                <td>$email</td>
                            </tr>
                            ";
                    }
                }
            ?>

            </tbody>
        </table>
    </div>


    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
