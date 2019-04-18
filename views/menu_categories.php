        <ul class="nav nav-pills flex-column">
            <h3 class="text-center">Catalogs</h3>
            <?php foreach ($this->model->getCategories() as $key => $category) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/parduotuve/catalog/<?php echo strtolower($category['name']); ?>"><?php echo $category['name']; ?></a>
                </li>
            <?php } ?>
        </ul>
