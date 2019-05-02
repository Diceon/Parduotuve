<div>
    <h1 class="text-center py-2">Change password</h1>
    <div class="col-xl-6 col-lg-8 col-md-10 col-sm-10 mx-auto mb-5 py-2 shadow d-flex flex-column">
        <form action="/parduotuve/profile" method="post">
            <div class="row border-bottom my-1 py-1">
                <div class="my-auto mr-3 col-4">Old password: </div>
                <input type="password" class="form-control col-7 my-auto" name="password" placeholder="Old password" required>
            </div>
            <div class="row border-bottom my-1 py-1">
                <div class="my-auto mr-3 col-4">New password: </div>
                <input type="password" class="form-control col-7 my-auto" name="password_new" placeholder="New password" required>
            </div>
            <div class="row border-bottom my-1 py-1">
                <div class="my-auto mr-3 col-4">Confirm password: </div>
                <input type="password" class="form-control col-7 my-auto" name="password_new_confirm" placeholder="Confirm password" required>
            </div>
            <div class="mt-3 pb-5">
                <a href="/parduotuve/profile"><button type="button" class="btn btn-dark float-left">Go back</button></a>
                <button type="submit" class="btn btn-primary float-right" name="edit_password">Confirm</button>
            </div>
        </form>
    </div>
</div>