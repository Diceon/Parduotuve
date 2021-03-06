<!DOCTYPE html>
<html lang="en">

<head>
    <!--    Defaults    -->
    <meta charset="UTF-8">
    <title>Shop</title>
    <meta name="description" content="...">
    <meta name="author" content="Aurelijus Pošius">
    <link rel="icon" href="/parduotuve/img/favicon.ico">

    <!--    Mobile    -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--    CSS    -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/parduotuve/style.css">
</head>

<body>

<div class="container p-0">
    
<!-- Header BEGIN -->
<header class="shadow">
    <div class="header-top">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">LOGO</a>
            <div class="ml-auto">
<?php if ($this->session->isLogged()) { ?>
<?php echo $this->session->isAdmin() ? '<a href="/parduotuve/admin"><button type="button" class="btn btn-light"><i class="fas fa-user-shield"></i> Admin</button></a>' : ''; ?>
                <a href="/parduotuve/profile"><button type="button" class="btn btn-light"><i class="fas fa-user"></i> Profile</button></a>
                <a href="/parduotuve/logout"><button type="button" class="btn btn-light"><i class="fas fa-sign-out-alt"></i> Logout</button></a>
<?php } else { ?>
                <a href="/parduotuve/login"><button type="button" class="btn btn-light"><i class="fas fa-sign-in-alt"></i> Login</button></a>
                <a href="/parduotuve/register"><button type="button" class="btn btn-light"><i class="fas fa-user-plus"></i> Register</button></a>
<?php } ?>
            </div>
        </nav>
    </div>
    <div class="header-middle">
        <div id="header" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#header" data-slide-to="0" class="active"></li>
            <li data-target="#header" data-slide-to="1"></li>
            <li data-target="#header" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/parduotuve/img/header1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-shadow-1">Model S | Tesla</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/parduotuve/img/header2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>-75% off!</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/parduotuve/img/header3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>...</h5>
                <p>...</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#header" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#header" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    <div class="header-bottom my-2">
        <ul class="nav nav-tabs">
<?php $menu = array("Home" => "", "Catalog" => isset($this->data['categories']) ? $this->data['categories'] : array(), "Blog" => "blog", "About" => "about"); ?>
            
<?php foreach ($menu as $key => $value) { ?>
<?php if(is_array($menu[$key])) { ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $key ?></a>
                <div class="dropdown-menu">
<?php foreach ($menu[$key] as $subkey => $submenu) { ?>
                    <a class="dropdown-item" href="/parduotuve/<?php echo strtolower($key) . "/" . $submenu['id']; ?>"><?php echo $submenu["name"]; ?></a>
<?php } ?>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/parduotuve/<?php echo strtolower($key); ?>"><?php echo $key;?></a>
                </div>
            </li>
<?php } else { ?>
            <li class="nav-item">
                <a class="nav-link<?php echo $this->page == $value ? " active" : ""; ?>" href="/parduotuve/<?php echo $value; ?>"><?php echo $key; ?></a>
            </li>
<?php } ?>
<?php } ?>
            <div class="ml-auto mx-3 d-flex">
                <a href="/parduotuve/cart" class="m-auto"><i class="fas fa-shopping-cart">Cart (<?php echo is_array($this->session->getUserCart()) ? count($this->session->getUserCart()) : '0'; ?>)</i></a>
            </div>
        </ul>
    </div>
</header>
<!-- Header END -->
        
<!-- Main BEGIN -->
<main class="container p-0">
