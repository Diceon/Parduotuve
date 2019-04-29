<?php if (isset($this->data['forum_posts']) && sizeof($this->data['forum_posts']) > 0) { ?>
<h1 class="text-center py-2"><?php echo $this->data['forum_posts'][0]['forum']; ?></h1>
<div class="position-relative col-xl-8 col-lg-10 col-md-12 col-sm-12 mx-auto mb-5 border shadow">
    <div class="row py-2 border-bottom">
        <div class="col-10 font-weight-bold">Post</div>
        <div class="col-2 font-weight-bold text-center">Posted by</div>
    </div>
    <div class="pb-5">
<?php foreach ($this->data['forum_posts'] as $key => $forum_post) { ?>
        <div class="row py-2">
            <div class="col-10"><a href="/parduotuve/blog/view_post/<?php echo mb_strtolower($forum_post['id']); ?>"><?php echo $forum_post['name']; ?></a></div>
            <div class="col-2 text-center"><?php echo $forum_post['username']; ?></div>
        </div>
<?php } ?>
        <a href="/parduotuve/blog/" class="position-absolute forum-back"><button type="button" class="btn btn-sm btn-light border">Back</button></a>
        <a href="/parduotuve/blog/post" class="position-absolute forum-post"><button type="button" class="btn btn-sm btn-light border">Post</button></a>
<?php } else { ?>
        <div class="my-5">
            <h1 class="text-center font-weight-bold">No such forum</h1>
        </div>
<?php } ?>
    </div>
</div>