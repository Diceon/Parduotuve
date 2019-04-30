<div class="col-xl-5 col-lg-6 col-md-8 col-sm-12 mx-auto m-5">
    <h1 class="my-2">Register</h1>
    <form action="register" method="post">
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="password2" name="password2" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-check mb-2">
            <input type="checkbox" class="form-check-input" id="robot" required>
            <label class="form-check-label" for="robot">I'm not a robot</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form>
    <div class="text-center mt-3">
        <a href="/parduotuve/login">Already have account?</a>
    </div>
</div>