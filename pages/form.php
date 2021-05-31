<h1>Form Page</h1>
<?php include 'templates/menu.php' ?>
<?php include 'templates/form.php' ?>

<form method="post">
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

<?php include 'templates/footer.php' ?>

