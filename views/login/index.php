<div class="col-xl-4 col-lg-5 col-md-7 col-sm-12 mx-auto m-5">
<?php if (isset($this->data['errors']) && is_array($this->data['errors'])) { ?>
<?php foreach ($this->data['errors'] as $key => $error) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
    </div>
<?php } ?>
<?php } ?>
    <h1 class="my-2">Login</h1>
    <form action="login" method="post">
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-check mb-2">
            <input type="checkbox" name="remember" class="form-check-input" id="remember">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
    <div class="text-center mt-3">
        <a href="/parduotuve/register">New member?</a>
    </div>
</div>