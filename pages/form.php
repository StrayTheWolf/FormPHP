<h1>Form page</h1>
<p>Enter data and click submit</p>

<form action="/handler" method="post">
    <div class="mb-3">
        <label>
            Name:
            <input type="text" name="name" class="form-control">
            <div class="form-text  mb-3">Enter your full name.</div>
        </label>
    </div>

    <div>
        <label>
            Age:
            <input type="number" name="age" class="form-control">
            <div class="form-text  mb-3">Enter your age.</div>
        </label>
    </div>

    <div>
        <label>
            Email:
            <input type="email" name="email" class="form-control">
            <div class="form-text  mb-3">Enter your email address.</div>
        </label>
    </div>

    <button class="btn btn-outline-primary mb-3">Submit</button>
</form>