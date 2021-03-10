<?php

  require("../config/commandes.php");
  $Produits=afficher();

?>

<!DOCTYPE html>
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      	
<form method="post">
  <div class="mb-3">

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Identifiant du produit</label>

    <input type="number" class="form-control" name="idproduit" required>
  </div>

  <button type="submit" name="valider" class="btn btn-primary">Supprimer le produit</button>
</form>

      </div>


<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  
        <?php foreach($Produits as $produit): ?> 
        <div class="col">
          <div class="card shadow-sm">
            
            <img src="<?= $produit->image ?>">

            <h3><?= $produit->id ?></h3>

            <div class="card-body">
            
            </div>
          </div>
        </div>
  <?php endforeach; ?>

</div>

    </div></div>

    
</body>
</html>

<?php

  if(isset($_POST['valider']))
  {
    if(isset($_POST['idproduit']))
    {
    if(!empty($_POST['idproduit']) AND is_numeric($_POST['idproduit']))
	    {
	    	$idproduit = htmlspecialchars(strip_tags($_POST['idproduit']));

          try 
          {
            supprimer($idproduit);
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }
	    	


	    }
    }
  }

?>