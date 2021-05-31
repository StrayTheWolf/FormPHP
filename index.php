<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <?php if (isset($_GET['message'])): ?>
        <p><?= $_GET['message']; ?></p>
    <?php endif; ?>

    <ul>
        <li>
            <a href="index.php" style="font-size: 25px;">Form</a>
        </li>
        <li>
            <a href="list.php" style="font-size: 25px;">List</a>
        </li>
    </ul>

    <form style="padding-left: 40px" action="form.php" method="post">
        <div>
            <label>
                Name:
                <input type="text" name="name" style="margin: 5px">
            </label>
        </div>

        <div>
            <label>
                Age:
                <input type="number" name="age" style="margin: 5px">
            </label>
        </div>

       <div>
          <label>
            Email:
            <input type="email" name="email" style="margin: 5px">
          </label>
       </div>

    <button>Submit</button>
    </form>
</body>
</html>
