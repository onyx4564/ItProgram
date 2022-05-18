<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <title>ItProgram - Про нас</title>
<body>
<?php require 'blocs/header.php'; ?>

<div class="container mt-2"></div>
<h3>Контактная форма</h3>
<form action="check.php" method="post">
  <input type="email" name="email" placeholder="Введите Email" class="form-control">
  <textarea name="message" class="form-control" placeholder="Введите ваше сообщения"></textarea>
  <button type="submit" name="send" class="btn btn-success">Отправить</button>
</form>
<div class="container mt-10"></div>
<?php require 'blocs/footer.php'; ?>
</body>