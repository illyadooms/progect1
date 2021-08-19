<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Список справ</h1>
    <form action="add.php" method="post">
        <input type="text" name="task" id="task" placeholder="Потрібно зробити..." class="form-control">
        <button type="submit" name="sendTask" class="btn btn-success">Відправити</button>
    </form>
    </br>
    <?php
    require_once 'configBD.php';

    $query = $pdo->query('SELECT * FROM task');

    echo '<ul class="list-group">';
    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<li class="list-group-item list-group-item-action clearfix"><b>' . $row->task . '</b> <a href="delete.php?id='.$row->id.'"><button type="button" class="btn btn-danger float-right">Видалити</button></a></li>';
    }
    echo '</ul>';
    ?>
</div>
</body>
</html>