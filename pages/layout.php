<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?? '' ?></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body class="d-flex align-items-center flex-column w-20 p-3 text-center justify-content-between" style="background-color: lightcyan; height: 100vh">

<header>
    <nav>
        <ul class="nav justify-content-center border border-info border border-1 rounded">
            <li class="nav-item">
                <a class="nav-link" href="/">Main</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/list">List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/form">Form</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
        </ul>
    </nav>

    <p><?= $data['subtitle'] ?? '' ?></p>
</header>

<main>
    <?php if (isset($_SESSION['message'])) : ?>
    <div class="alert alert-primary" role="alert">
        <?= $_SESSION['message'] ?>
    </div>
    <?php unset($_SESSION['message']); endif; ?>

    <?= $content ?? ''?>
</main>

<footer>
    Made by &#128058;
</footer>
</body>
</html>

