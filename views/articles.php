<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мой Первый Блог</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Мой Первый Блог</h1>
        <a href="admin">Панель Админа</a>
        <div>
           <?php foreach($article as $a): ?>
            <div class="article">
                <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                <em>Опубликовано: <?=$a['date']?></em>
                <p><?=articles_intro($a['content'])?></p>
            </div>
            <?php endforeach ?>
        </div>
        <footer>
            <p>Мой Первый Блог<br>Copyright &copy; 2015</p>
        </footer>
    </div>
</body>
</html>