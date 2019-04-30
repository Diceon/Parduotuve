<h1 class="text-center py-2">Post</h1>
<div class="position-relative col-xl-5 col-lg-6 col-md-8 col-sm-11 mx-auto pb-4 mb-5 shadow">
    <form action="/parduotuve/blog/post/<?php echo isset($this->data['forum_id']) ? $this->data['forum_id'] : ''; ?>" method="post">
        <div class="form-group mt-3">
            <input type="text" name="post_name" class="form-control" placeholder="Name" required>
        </div>
        <div class="form-group">
            <textarea name="post_content" class="form-control" placeholder="Message" required></textarea>
        </div>
        <div class="form-group text-center pb-1">
            <button class="btn btn-sm btn-primary position-absolute forum-post">Post &rarr;</button>
        </div>
    </form>
    <a href="/parduotuve/blog/<?php echo isset($this->data['forum_id']) ? $this->data['forum_id'] : ''; ?>" class="position-absolute m-1 forum-back"><button type="button" class="btn btn-sm btn-dark">&larr; Back</button></a>
</div>