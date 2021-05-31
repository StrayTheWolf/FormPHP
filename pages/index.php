<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
</head>
<body>

<h1>Main page</h1>
<p>Use menu to navigate</p>

<main>
    <?php include 'templates/menu.php' ?>

    <?php if (isset($_GET['message'])): ?>
        <p><?= $_GET['message']; ?></p>
    <?php endif;
    ?>
</main>

<?php include 'templates/footer.php' ?>
</body>
</html>