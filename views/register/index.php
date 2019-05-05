<div class="col-xl-5 col-lg-6 col-md-8 col-sm-12 mx-auto m-4">
<?php if (isset($this->data['errors']) && is_array($this->data['errors'])) { ?>
<?php foreach ($this->data['errors'] as $key => $error) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
    </div>
<?php } ?>
<?php } ?>
    <h1 class="display-3 text-center mb-3">Register</h1>
    <form action="register" method="post">
        <div class="input-group my-2">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="input-group my-2">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
            </div>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="input-group my-2">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-lock"></i></div>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="input-group my-2">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-lock"></i></div>
            </div>
            <input type="password" name="password2" class="form-control" placeholder="Confirm password" required>
        </div>
        <div class="form-check my-2 text-center">
            <input type="checkbox" class="form-check-input" id="robot" required>
            <label class="form-check-label" for="robot">I'm not a robot</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form>
    <div class="text-center mt-3">
        <a href="/parduotuve/login">Already have account?</a>
    </div>
</div>