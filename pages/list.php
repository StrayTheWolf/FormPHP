<h1>List page</h1>
<?php include 'templates/menu.php' ?>
<?php include 'templates/list.php' ?>
<ul>
    <?php foreach ($arr as $item): ?>
        <br>
        <li>
            Name:
            <?= $item['name'] ?>
            <br>
            Age:
            <?= $item['age'] ?>
            <br>
            Email:
            <?= $item['email'] ?>
        </li>
    <?php endforeach; ?>
</ul>
