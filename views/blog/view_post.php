<?php if (isset($this->data['forum_post']) && count($this->data['forum_post']) > 0) { ?>
    <div class="position-relative col-xl-8 col-lg-10 col-md-10 col-sm-12 mx-auto my-5 py-5 shadow">
        <h1><?php echo $this->data['forum_post']['name']; ?></h1>
        <p class="font-weight-light"><?php echo date('M j, Y - G:i', strtotime($this->data['forum_post']['date'])); ?> by <a href="/parduotuve/profile/<?php echo $this->data['forum_post']['user']; ?>"><?php echo $this->data['forum_post']['user']; ?></a></p>
        <p class=""><?php echo $this->data['forum_post']['message']; ?></p>
        <a href="/parduotuve/blog/<?php echo $this->data['forum_post']['forum_id']; ?>" class="position-absolute m-1 forum-back"><button type="button" class="btn btn-sm btn-dark">&larr; Back</button></a>
    </div>
<?php } else { ?>
    <h1 class="text-center my-5">Post not found</h1>
<?php } ?>
