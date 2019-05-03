        <ul class="nav nav-pills flex-column my-2">
<?php if (isset($this->data['categories'])) { ?>
            <h3 class="text-center">Catalogs</h3>
<?php foreach ($this->data['categories'] as $key => $category) { ?>
                <li class="nav-item">
                    <a class="nav-link text-break" href="/parduotuve/catalog/<?php echo mb_strtolower($category['id']); ?>"><?php echo $category['name']; ?></a>
                </li>
<?php } ?>
<?php } else { ?>
            <h3 class="text-center my-5">No catalogs</h3>
<?php } ?>
        </ul>
