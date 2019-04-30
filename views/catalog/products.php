    <div class="row m-0">
        <aside class="col-md-3 border-left border-right mb-1">
<?php include_once 'views/menu_categories.php'; ?>
        </aside>

        <div class="col-md-9 col-sm-12 row p-0 m-0 d-flex justify-content-start">
<?php if (isset($this->data['products']) && count($this->data['products']) > 0) { ?>
<?php foreach ($this->data['products'] as $key => $product) { ?>
            <div class="card col-lg-4 col-md-6 col-sm-12 p-0 my-1">
                <a href="/parduotuve/product/<?php echo mb_strtolower($product['name']); ?>">
                    <img src="/parduotuve/img/products/<?php echo isset($product['image']) ? $product['image'] : 'no-image.png'; ?>" class="card-img-top p-4" alt="">
                </a>
<?php if ($product['is_new']) { ?>
                    <div class="new">
                        New
                    </div>
<?php } ?>
                <div class="card-body">
                    <h5 class="card-title text-center"><a href="/parduotuve/product/<?php echo mb_strtolower($product['name']); ?>"><?php echo $product['name']; ?></a></h5>
                    <p class="card-text text-center"><?php echo '$ ' . $product['price']; ?></p>
<?php if ($product['is_recommended']) { ?>
                    <p class="card-text text-center recommended">Recommended</p>
<?php } ?>
                    <button type="button" class="btn btn-primary btn-lg btn-block">Add to cart</button>
                </div>
            </div>
<?php } ?>
<?php } else { ?>
            <div class="mx-auto my-5 px-2 text-center">
                <h2 class="font-weight-bold">There are no products in this catalog</h2>
                <a href="/parduotuve/catalog/" class="d-inline-block mt-3"><button type="button" class="btn btn-lg btn-primary border">Go back</button></a>
            </div>
<?php } ?>
        </div>
    </div>