<h1>List page</h1>
<p>List of all users</p>

<ul class="nav flex-column">
    <?php foreach ($_SESSION['list'] as $item): ?>
        <br>
        <li class="nav-item mb-3 text-start border border-info border-2 rounded p-2">
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