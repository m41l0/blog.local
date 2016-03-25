<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мой Первый Блог</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Мой Первый Блог</h1>
        <div>
         <a href="../admin/index.php?action=add">Добавить статью</a>
          <table class="admin-table">
              <tr>
                  <th>Дата</th>
                  <th>Заголовок</th>
                  <th></th>
                  <th></th>
              </tr>
              <?php foreach($article as $a): ?>
              <tr>
                  <td><?=$a['date']?></td>
                  <td><?=$a['title']?></td>
                  <td>
                      <a href="../admin/index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
                  </td>
                  <td>
                      <a href="../admin/index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
                  </td>
              </tr>
              <?php endforeach ?>
          </table>
        </div>
        <footer>
            <p>Мой Первый Блог<br>Copyright &copy; 2015</p>
        </footer>
    </div>
</body>
</html>