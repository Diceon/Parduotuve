<pre>
<?php //var_dump($this->data['product']); ?>
</pre>
<div class="card ">
  <img src="/parduotuve/img/products/<?php echo $this->data['product']["image"]; ?>" class="card-img" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $this->data['product']["name"]; ?></h5>
    <p class="card-text"><?php echo $this->data['product']["description"]; ?></p>
  </div>
</div>