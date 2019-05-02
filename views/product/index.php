<div class="row m-0">
    <aside class="col-xl-3 col-lg-12 col-md-12 col-sm-12 border-left border-right mb-1">
<?php include_once 'views/menu_categories.php'; ?>
    </aside>
<pre>
<?php //var_dump($this->data['product']); ?>
</pre>
<?php if(isset($this->data['product']) && count($this->data['product']) > 0) { ?>
    <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 row p-0 mx-auto my-3 d-flex">
        <div class="position-relative col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <img src="/parduotuve/img/<?php echo isset($this->data['product']["image"]) ? ('products/' . $this->data['product']["image"]) : 'no-image.png'; ?>" class="img-fluid rounded mx-auto d-block" alt="<?php echo $this->data['product']["name"]; ?>" title="<?php echo $this->data['product']["name"]; ?>">
<?php if ($this->data['product']['is_new']) { ?>
                <div class="new">New</div>
<?php } ?>
<?php if ($this->data['product']['is_recommended']) { ?>
                <p class="recommended">Recommended</p>
<?php } ?>
        </div>
        <div class="col-xl-6 col-lg-10 col-md-10 col-sm-11 mx-auto">
            <div class="my-5">
                <h1 class="m-0"><?php echo $this->data['product']["name"]; ?></h1>
                <p class="text-muted"><small>Product code: <?php echo $this->data['product']["code"]; ?></small></p>
                <h2 class="text-primary">$ <?php echo $this->data['product']["price"]; ?></h2>
                <div>
                    <form action="/parduotuve/cart" method="post" class="row">
                        <button type="button" class="btn btn-light mr-1 col-1">-</button>
                        <input type="number" class="form-control col-2" name="amount" value="1" min="0" max="10" placeholder="amount">
                        <button type="button" class="btn btn-light ml-1 col-1">+</button>
                        <button type="submit" class="btn btn-primary col-3 mx-1" name="cart_add" value="<?php echo $this->data['product']["id"]; ?>">Add to cart</button>
                    </form>
                    <div class="my-2"><span class="font-weight-bold">Stock: </span><?php echo $this->data['product']["availability"]; ?></div>
                    <div class="my-2"><span class="font-weight-bold">Brand: </span><?php echo $this->data['product']["brand"]; ?></div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-5">
            <h4>Product description:</h4>
            <p class="font-weight-light"><?php echo $this->data['product']["description"]; ?></p>
        </div>
    </div>
<?php } else { ?>
    <div class="mx-auto my-5 text-center">
        <h1 class="font-weight-bold">Product not found</h1>
        <a href="/parduotuve/catalog/" class="d-inline-block mt-3"><button type="button" class="btn btn-lg btn-primary border">Go back</button></a>
    </div>
<?php } ?>
</div>