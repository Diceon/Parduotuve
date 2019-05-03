<div>
    <div class="col-xl-10 col-lg-8 col-md-10 col-sm-12 mx-auto mt-3 mb-5">
<?php if (isset($this->data['errors']) && is_array($this->data['errors'])) { ?>
<?php foreach ($this->data['errors'] as $key => $error) { ?>
        <div class="alert alert-danger col-xl-6 col-lg-8 col-md-10 col-sm-10 mx-auto text-center" role="alert">
            <?php echo $error; ?>
        </div>
<?php } ?>
<?php } elseif (isset($this->data['info']) && is_array($this->data['info'])) {?>
<?php foreach ($this->data['info'] as $key => $info) { ?>
        <div class="alert alert-success col-xl-6 col-lg-8 col-md-10 col-sm-10 mx-auto text-center" role="alert">
            <?php echo $info; ?>
        </div>
<?php } ?>
<?php } ?>
<?php if(isset($this->data['products']) && is_array($this->data['products']) && count($this->data['products']) > 0) { ?>
        <h1 class="text-center mt-3">Cart</h1>
        <ul class="list-group">
<?php foreach ($this->data['products'] as $key => $product) { ?>
            <li class="list-group-item mb-1"><a href="/parduotuve/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a> - $<?php echo $product['price']; ?> x <?php echo $product['amount']; ?> <form action="/parduotuve/cart" method="post" class="d-inline   "><button type="submit" class="close" name="cart_remove" value="<?php echo $key; ?>"><span class="text-danger" aria-hidden="true">&times;</span></button></form></li>
<?php } ?>
        </ul>
        <div class="mt-2 text-center">
            <h4>Total: $<?php echo array_sum(array_map(function ($item) { return $item['price'] * (($item['amount'] > 0) ? $item['amount'] : 1); }, $this->data['products'])); ?></h4>
        </div>
        <a href="/parduotuve/cart/continue"><button class="btn btn-block btn-primary">Continue</button></a>
<?php } else {?>
        <div class="my-5">
            <h2 class="text-center">Cart is empty</h2>
        </div>
<?php } ?>
    </div>
</div>