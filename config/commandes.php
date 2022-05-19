<?php


  function ajouter($image, $nom, $prix, $desc)
  {
    if(require("connexion.php"))
    {
      $req = $access->prepare("INSERT INTO produits (image, nom, prix, description) VALUES ('$image', '$nom', $prix, '$desc')");

      $req->execute(array($image, $nom, $prix, $desc));

      $req->closeCursor();
    }
  }

function afficher()
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM produits ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function supprimer($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("DELETE FROM produits WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}

function getAdmin($email, $password){
  
  if(require("connexion.php")){

    $req = $access->prepare("SELECT * FROM admin WHERE id=33");

    $req->execute();

    if($req->rowCount() == 1){
      
      $data = $req->fetchAll(PDO::FETCH_OBJ);

      foreach($data as $i){
        $mail = $i->email;
        $mdp = $i->motdepasse;
      }

      if($mail == $email AND $mdp == $password)
      {
        return $data;
      }
      else{
          return false;
      }

    }

  }

}

?>