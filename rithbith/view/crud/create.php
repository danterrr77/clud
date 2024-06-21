<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<form action = "vendor/create_bd.php" method = "post">

    <label for="text">Заголовок</label><br>
    <input type="text" class="form-control" id="text" placeholder="Зголовок" name = "title"><br>

    <label for="text">Ввод</label><br>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "content"></textarea><br>
 <button>создать</button>
</form>
</body>
</html>