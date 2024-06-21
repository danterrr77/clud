<?php
require "connect.php";

$id = $_GET['id'];

// $sql = "SELECT * FROM `posts` WHERE id =:id";
// $statement = $pdo -> prepare($sql);
// $statement = execute($_GET);
// $posts = $statement -> fetch(Pdo::FETCH_ASSOC);

$query = $pdo->query("SELECT * FROM `posts` WHERE id =$id");
$post = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<form action = "vendor/update.php" method = "post">
    <input type="hidden" name="id" value="<?=$post['id']?>">
    <label for="text">Заголовок</label><br>
    <input value="<?=$post['title']?>" type="text" class="form-control" id="text" placeholder="Зголовок" name = "title"><br>

    <label for="text">Ввод</label><br>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "content"><?=$post['content']?></textarea><br>
    
 <button>редактировать</button>
</form>
</body>
</html>