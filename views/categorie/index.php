<?php
//Form to add and show categories
?>

<h2>Ajouter une categorie : </h2>
<form id="categoryCreationForm" action="<?php echo URL;?>categorie/create" method="post">
<label for="titre">Titre de la catégorie :</label><br/>
<input type="text" name="titre" id="titre"><br/>
<label for="description">Description :</label><br/>
<textarea name="description" id="description"></textarea><br/>
<label></label><br/>
<input type="submit" value="Ajouter categorie">
</form>
<br/>
<div id="listCategories"></div>
