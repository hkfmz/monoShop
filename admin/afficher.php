<?php
session_start();

    require("../config/commandes.php");

    if(!isset($_SESSION['xRttpHo0greL39']))
    {
        header("Location: ../login.php");
    }

    if(empty($_SESSION['xRttpHo0greL39']))
    {
        header("Location: ../login.php");
    }

require("../config/commandes.php");

$produits = afficher();

    
?>

<!DOCTYPE html>
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
<a class="navbar-brand" href="../">MonoShop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link active" style="font-weight: bold;" aria-current="page" href="../admin/afficher.php">Produits</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="../admin/">Nouveau</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="supprimer.php">Suppression</a>
        </li>
        
    </ul>
    <a class="btn btn-danger d-flex" style="display: flex; justify-content: flex-end;" href="destroy.php">Se deconnecter</a>
    </div>
</div>
</nav>

<div class="album py-5 bg-light">
    <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">nom</th>
                <th scope="col">prix</th>
                <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
<?php foreach($produits as $produit): ?>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                </tr>      
<?php endforeach; ?>

            </tbody>
            </table>
    </div>
</div>
</div>

    
</body>
</html>

<?php


?>