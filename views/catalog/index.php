<div class="row my-3">
    <aside class="col-md-3">
<?php include_once 'views/menu_categories.php'; ?>
    </aside>

    <div class="col-md-9 d-flex justify-content-around">
<?php if (isset($this->data['products'])) { ?>
<?php foreach ($this->data['products'] as $key => $product) { ?>
        <div class="card" style="width: 16rem;">
            <a href="/parduotuve/product/<?php echo $product['name']; ?>">
                <img src="/parduotuve/img/<?php echo isset($product['image']) ? $product['image'] : 'no-image.png'; ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $product['name']; ?></h5>
                </div>
            </a>
        </div>
<?php } ?>
<?php } else { ?>
<?php foreach ($this->data['categories'] as $key => $category) { ?>
        <div class="card" style="width: 16rem;">
            <a href="/parduotuve/catalog/<?php echo mb_strtolower($category['name']); ?>">
                <img src="/parduotuve/img/<?php echo isset($category['image']) ? $category['image'] : 'no-image.png'; ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $category['name']; ?></h5>
                </div>
            </a>
        </div>
<?php } ?>
<?php } ?>
    </div>
</div>