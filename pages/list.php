<h1>List page</h1>
<p>List of all users</p>

<ul class="nav flex-column ">
    <?php foreach ($list as $item): ?>
        <br>
        <li class="nav-item mb-3 text-start border border-info border-2 rounded p-2" >
            ID:
            <?= $item['id'] ?>
            <br>
            Login:
            <?= $item['login'] ?>
            <br>
            Password:
            <?= $item['password'] ?>
            <br>
            Name:
            <?= $item['name'] ?>
            <br>
            Last Name:
            <?= $item['last_name'] ?>
            <br>
            Email:
            <?= $item['email'] ?>
            <br>
            Phone:
            <?= $item['phone_number'] ?>
            <br>
            Age:
            <?= $item['age'] ?>
            <br>
            Sex:
            <?= $item['sex'] ?>
            <br>
            About:
            <?= $item['about_yourself'] ?>
            <br>
            Agree Promo:
            <?= $item['agree_promo'] ?>
            <br>
        </li>
    <?php endforeach; ?>
</ul>