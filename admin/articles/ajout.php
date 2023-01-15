<?php
 if(!empty($_POST)){
    if(
        isset($_POST["titre"], $_POST["auteur"])
        && !empty($_POST["titre"]) && !empty($_POST["auteur"])
    ){
        $titre = strip_tags($_POST["titre"]);

        $auteur = htmlspecialchars($_POST["auteur"]);

        require_once "../../testbdd.php";

        $sql = "INSERT INTO `livre`(`titreLivre`,`auteurLivre`) VALUES(:title, : author)";

        $query = $db->prepare($sql);

        $query->bindVAlue(":title", $titre, PDO::PARAM_STR);
        $query->bindVAlue(":author", $auteur, PDO::PARAM_STR);

       if(!$query->execute()){
            die("Une erreur est survenue")
       }

       $id = $db->lastInserId();

       die("Article ajouté sous le numéro $id");

    }else{
        die("le formulaire est incomplet");
    }
 }
 include_once "../../menu.php";
 ?>

<h1>Ajouter un article</h1>

<form method="post">
    <div>
      <label for="titre">Titre</label> 
      <input type="text" name="titre" id="titre"> 
    </div>

    <div>
        <label for="auteur">Auteur</label>
        <input type="text" name="auteur" id="auteur">
    </div>
    <button type="submit">Enregistrer</button>
</form>



<?php
 include_once "../../pied_de_page.php";




 