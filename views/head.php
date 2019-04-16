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