<h1 class="text-center py-2">Forum</h1>
<div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 mx-auto mb-5 border shadow">
    <div class="row py-2 border-bottom">
        <div class="col-10 font-weight-bold">Post</div>
        <div class="col-2 font-weight-bold text-center">Posted by</div>
    </div>
<?php if (isset($this->data['forum_posts']) && sizeof($this->data['forum_posts']) > 0) { ?>remake this <--
<?php foreach ($this->data['forum_posts'] as $key => $forum_post) { ?>
    <div class="row py-2">
        <div class="col-10"><a href="/parduotuve/blog/view/<?php echo mb_strtolower($forum_post['id']); ?>"><?php echo $forum_post['name']; ?></a></div>
        <div class="col-2 text-center"><?php echo $forum_post['username']; ?></div>
    </div>
<?php } ?>
<?php } else { ?>
    <h3 class="text-center font-weight-bold my-3">No such forum</h3>
<?php } ?>
</div>