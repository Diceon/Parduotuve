    <div class="row m-0">
        <aside class="col-lg-3 col-md-12 border-left border-right mb-1">
<?php include_once 'views/menu_categories.php'; ?>
        </aside>

        <div class="col-lg-9 col-md-12 col-sm-12 row p-0 m-0 d-flex justify-content-start">
<?php if (isset($this->data['products'])) { ?>
<?php foreach ($this->data['products'] as $key => $product) { ?>
            <div class="card col-xl-4 col-lg-6 col-md-6 col-sm-12 p-0 my-1">
                <a href="/parduotuve/product/<?php echo $product['id']; ?>">
                    <img src="/parduotuve/img/products/<?php echo isset($product['image']) ? $product['image'] : 'no-image.png'; ?>" class="card-img-top p-4" alt="">
                </a>
<?php if ($product['is_new']) { ?>
                    <div class="new">
                        New
                    </div>
<?php } ?>
                <div class="card-body">
                    <h5 class="card-title text-center"><a href="/parduotuve/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h5>
                    <p class="card-text text-center"><?php echo '$ ' . $product['price']; ?></p>
<?php if ($product['is_recommended']) { ?>
                    <p class="card-text text-center recommended">Recommended</p>
<?php } ?>
                    <form action="/parduotuve/cart" method="post">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="cart_add" value="<?php echo $product['id']; ?>">Add to cart</button>
                    </form>
                </div>
            </div>
<?php } ?>
<?php } else { ?>
            <h3 class="mx-auto my-5">There are no products</h3>
<?php } ?>
        </div>
    </div>