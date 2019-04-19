<div class="row my-3">
    <aside class="col-md-3">
        <?php include_once 'views/menu_categories.php'; ?>
    </aside>

    <div class="col-md-9 row">
        <pre>
<?php //var_dump($this->model->getProducts()) ?>
        </pre>
        <?php foreach ($this->model->getProducts() as $key => $value) { ?>
        <div class="card mx-1" style="width: 16rem;">
            <a href="/parduotuve/product/<?php echo mb_strtolower($value['name']); ?>">
                <img src="/parduotuve/img/<?php echo isset($value['image']) ? $value['image'] : 'no-image.png'; ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $value['name']; ?></h5>
                    <p class="card-text text-center"><?php echo '$ ' . $value['price']; ?></p>
                </div>
            </a>
        </div>
        <?php } ?>

    </div>
</div>