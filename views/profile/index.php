<div>
    <h1 class="text-center py-2">Profile</h1>
<?php if (isset($this->data['errors']) && is_array($this->data['errors'])) { ?>
<?php foreach ($this->data['errors'] as $key => $error) { ?>
    <div class="alert alert-danger col-xl-6 col-lg-8 col-md-10 col-sm-10 mx-auto text-center" role="alert">
        <?php echo $error; ?>
    </div>
<?php } ?>
<?php } elseif (isset($this->data['info']) && is_array($this->data['info'])) {?>
<?php foreach ($this->data['info'] as $key => $info) { ?>
    <div class="alert alert-success col-xl-6 col-lg-8 col-md-10 col-sm-10 mx-auto text-center" role="alert">
        <?php echo $info; ?>
    </div>
<?php } ?>
<?php } ?>
    <div class="col-xl-6 col-lg-8 col-md-10 col-sm-10 mx-auto mb-5 py-2 shadow d-flex flex-column">
        <div class="row border-bottom my-1 py-2">
            <h4 class="my-auto mr-3 col-3">Username:</h4>
            <h5 class="my-auto col-8"><?php echo $this->session->getUserName(); ?></h5>
        </div>
        <div class="row border-bottom my-1 py-2">
            <div class="my-auto mr-3 col-3">Email: </div>
            <div class="my-auto"><?php echo $this->session->getUserEmail();  ?></div>
        </div>
        <div class="row border-bottom my-1 py-2">
            <div class="my-auto mr-3 col-3">Registered: </div>
            <div class="my-auto"><?php echo $this->session->getUserRegisterDate();  ?></div>
        </div>
        <div class="row mt-2 d-flex ">
            <a href="/parduotuve/profile/edit_password" class="mx-auto"><button type="button" class="btn btn-primary">Change password</button></a>
            <a href="/parduotuve/profile/edit" class="mx-auto"><button type="button" class="btn btn-primary">Edit profile</button></a>
        </div>
    </div>
</div>