<div>
    <h1 class="text-center py-2">Edit profile</h1>
    <div class="col-xl-6 col-lg-8 col-md-10 col-sm-10 mx-auto mb-5 py-2 shadow d-flex flex-column">
        <form action="/parduotuve/profile" method="post">
            <div class="row border-bottom my-1 py-1">
                <h4 class="my-auto mr-3 col-3">Username:</h4>
                <h5 class="my-auto text-muted col-8"><?php echo $_SESSION['user_info']['username'] ?></h5>
            </div>
            <div class="row border-bottom my-1 py-1">
                <div class="my-auto mr-3 col-3">Email: </div>
                <input type="email" class="form-control col-8 my-auto" name="email" value="<?php echo $_SESSION['user_info']['email'] ?>" placeholder="Email">
            </div>
            <div class="row border-bottom my-1 py-1">
                <div class="my-auto mr-3 col-3">Password: </div>
                <input type="password" class="form-control col-8 my-auto" name="password" placeholder="Confirm password" required>
            </div>
            <div class="mt-3 pb-5">
                <a href="/parduotuve/profile"><button type="button" class="btn btn-dark float-left">Go back</button></a>
                <button type="submit" class="btn btn-primary float-right" name="edit_profile">Confirm</button>
            </div>
        </form>
    </div>
</div>