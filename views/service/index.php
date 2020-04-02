<?php   ?>
<h2>Ajouter un service aux annuaires : </h2> 
<form id="serviceCreationForm" action="<?php echo URL;?>service/create" method="post">
<label for="denomination">Dénomination :</label><br/>
<input type="text" name="denomination" id="denomination"><br/>
<label for="telephone">Téléphone :</label><br/>
<input type="text" name="telephone" id="telephone"><br/>
<label for="email">Adresse mail :</label><br/>
<input type="email" name="adressemail" id="email"><br/>
<label for="categorie">Choisir une catégorie :</label><br/>
<select type="role" name="categorie" id="categorie">
	<! -- List the category names from database here -->
    <?php echo Utils::arrayToList($this->categorieNameList); ?>
</select><br/>
<label for="adresse">Adresse :</label><br/>
<textarea name="adresse" id="adresse"></textarea><br/>
<label for="horairedisponibilite">Horaire de disponibilité :</label><br/>
<input type="text" name="horairedisponibilite" id="horairedisponibilite"><br/>
<label for="ville"><b>Localiser le service : </b></label><br/>
<label for="ville">Pays : </label><br/>
<select type="role" name="pays" id="pays" onChange="refreshTownList(this.value);">
	<option value="">Sélectionnez le pays</option>
	<! -- List the city's names from database here -->
	<?php echo Utils::arrayItemToList($this->paysNameList); ?>

</select><br/>
<label for="ville">Ville : </label><br/>
<select type="role" name="ville" id="ville" onchange="showHideEle(this, 'nouvelleVille', 'Ajouter votre ville')">
	<option value="">Sélectionnez la ville</option>
	<! -- List the city's names from database here -->
	<! -- Only if they are located in the selected country -->
	
<option>Ajouter votre ville</i></option>
</select><br/>
<! -- Showed only if the town is new -->
<input type="text" name="nouvelleVille" id="nouvelleVille" 
placeholder="Saisissez le nom de votre ville"
style="display:none;"/><br/>
<label for="details">Details sur le service :</label><br/>
<textarea name="details" id="details"></textarea><br/>
<label></label><br/>
<input type="submit" value="Reférencer Service">
</form>
<br/>
<div id="listServices"></div>
