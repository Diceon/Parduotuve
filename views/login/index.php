<div class="col-xl-4 col-lg-5 col-md-7 col-sm-12 mx-auto m-4">
<?php if (isset($this->data['errors']) && is_array($this->data['errors'])) { ?>
<?php foreach ($this->data['errors'] as $key => $error) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
    </div>
<?php } ?>
<?php } ?>
    <h1 class="display-3 text-center mb-3">Login</h1>
    <form action="login" method="post">
        <div class="input-group my-2">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
            <input type="text" class="form-control" name="username" placeholder="Username" required>
        </div>
        <div class="input-group my-2">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-lock"></i></div>
            </div>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="form-check my-2 text-center">
            <input type="checkbox" name="remember" class="form-check-input" id="remember">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
    <div class="text-center mt-3">
        <a href="/parduotuve/register">New member?</a>
    </div>
</div>