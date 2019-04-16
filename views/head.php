<!DOCTYPE html>
<html lang="en">

<head>
    <!--    Defaults    -->
    <meta charset="UTF-8">
    <title>...</title>
    <meta name="description" content="...">
    <meta name="author" content="...">

    <!--    Mobile    -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--    CSS    -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <div class="container">
        <?php var_dump($this->session->isLogged()); ?>
        <!-- Header BEGIN -->
        <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">LOGO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="/parduotuve/index">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catalog</a>
                    <div class="dropdown-menu">
                        <?php foreach ($this->model->getCategories() as $category) { ?>
                        <a class="dropdown-item" href="/parduotuve/catalog/<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a>
                        <?php } ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/parduotuve/catalog">Catalogs</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/parduotuve/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/parduotuve/about">About</a>
                </li>                
            </ul>
            
            <div class="">
                das
            </div>
            
        </div>
        <!-- Header END -->
        
        <!-- Main BEGIN -->
        