<h1 class="text-center py-2">Forum</h1>
<div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 mx-auto mb-5 border shadow">
<?php if (isset($this->data['forums']) && count($this->data['forums']) > 0) { ?>
    <div class="row py-2 border-bottom">
        <div class="col-10 font-weight-bold">Forum</div>
        <div class="col-2 font-weight-bold text-center">Posts</div>
    </div>
    <div class="row my-2">
<?php foreach ($this->data['forums'] as $key => $forum) { ?>
        <div class="col-10"><a href="/parduotuve/blog/<?php echo $forum['id']; ?>"><?php echo $forum['name']; ?></a></div>
        <div class="col-2 text-center"><?php echo $forum['posts']; ?></div>
<?php } ?>
    </div>
<?php } else { ?>
    <h3 class="text-center font-weight-bold my-5">There are 0 forum categories</h3>
<?php } ?>
</div>