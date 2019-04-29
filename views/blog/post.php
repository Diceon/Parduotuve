<h1 class="text-center py-2">Post</h1>
<div class="col-xl-5 col-lg-6 col-md-8 col-sm-11 mx-auto mb-5 shadow">
    <form action="/parduotuve/blog/post" method="post">
        <div class="form-group mt-3">
            <input type="text" name="post_name" class="form-control" placeholder="Name" required>
        </div>
        <div class="form-group">
            <textarea name="post_content" class="form-control" placeholder="Message" required></textarea>
        </div>
        <div class="form-group text-center pb-3">
            <button class="btn btn-primary">Post</button>
        </div>
    </form>
</div>