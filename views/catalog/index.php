    <div class="row m-0">
        <aside class="col-md-3 border-left border-right mb-1">
<?php include_once 'views/menu_categories.php'; ?>
        </aside>

        <div class="col-md-9 col-sm-12 row p-0 m-0 d-flex justify-content-start">
<?php if (isset($this->data['categories']) && count($this->data['categories']) > 0) { ?>
<?php foreach ($this->data['categories'] as $key => $category) { ?>
            <div class="card col-lg-4 col-md-6 col-sm-12 p-0 my-1">
                <a href="/parduotuve/catalog/<?php echo mb_strtolower($category['id']); ?>">
                    <img src="/parduotuve/img/<?php echo isset($category['image']) ? ('categories/' . $product['image']) : 'no-image.png'; ?>" class="card-img-top p-4" alt="">
                </a>
                <div class="card-body">
                    <h5 class="card-title text-center"><a href="/parduotuve/catalog/<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a></h5>
                </div>
            </div>
<?php } ?>
<?php } else { ?>
            <h3 class="mx-auto my-5">There are no catalogs</h3>
<?php } ?>
        </div>
    </div>