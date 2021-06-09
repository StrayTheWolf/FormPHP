<h1>Form page</h1>
<p>Enter data and click submit</p>

<form action="/handler" method="post">
    <div class="mb-3">
        <label>
            Login:
            <input type="text" name="login" class="form-control">
            <div class="form-text  mb-3">Create login</div>
        </label>
    </div>

    <div class="mb-3">
        <label>
            Password:
            <input type="password" name="password" class="form-control">
            <div class="form-text  mb-3">Create password</div>
        </label>
    </div>

    <div class="mb-3">
        <label>
            Name:
            <input type="text" name="name" class="form-control">
            <div class="form-text  mb-3">Enter your name.</div>
        </label>
    </div>

    <div class="mb-3">
        <label>
            Last Name:
            <input type="text" name="last_name" class="form-control">
            <div class="form-text  mb-3">Enter your last name (if exist).</div>
        </label>
    </div>

    <div>
        <label>
            Email:
            <input type="email" name="email" class="form-control">
            <div class="form-text  mb-3">Enter your email address.</div>
        </label>
    </div>

    <div>
        <label>
            Phone number:
            <input type="tel" name="phone" class="form-control">
            <div class="form-text  mb-3">Enter your email address.</div>
        </label>
    </div>

    <div>
        <label>
            Age:
            <input type="number" name="age" min="0" max="100" class="form-control">
            <div class="form-text  mb-3">Enter your age.</div>
        </label>
    </div>

    <div>
        <label>
            Sex:
            <input type="text" name="sex" class="form-control">
            <div class="form-text  mb-3">Your gender</div>
        </label>
    </div>

    <div>
        <label>
            About yourself:
            <input type="text" name="about" class="form-control">
            <div class="form-text  mb-3">Some additional info (optional)</div>
        </label>
    </div>

    <div>
        <label>
            Agree Promo:
            <input type="number" name="agree_promo" class="form-control" value="1" min="0" max="1">
            <div class="form-text  mb-3">Promo send agreement (1 - yes, 0 - no)</div>
        </label>
    </div>

    <button class="btn btn-outline-primary mb-3">Submit</button>
</form>