<?php   ?>
<h2>Ajouter un service aux annuaires : </h2>
<form id="serviceCreationForm" action="<?php echo URL;?>service/create" method="post">
<label for="denomination">Dénomination :</label><br/>
<input type="text" name="denomination" id="denomination"><br/>
<label for="telephone">Téléphone :</label><br/>
<input type="usern" name="telephone" id="telephone"><br/>
<label for="email">Adresse mail :</label><br/>
<input type="email" name="adressemail" id="email"><br/>
<label for="role">Rôle :</label><br/>
<select type="role" name="categorie" id="categorie">
    <option>Cyber Café</option>
    <option>Service de maintenance</option>
</select><br/>
<label for="adresse">Adresse :</label><br/>
<textarea name="adresse" id="adresse"></textarea><br/>
<label for="horairedisponibilite">Horaire de disponibilité :</label><br/>
<input type="text" name="horairedisponibilite" id="horairedisponibilite"><br/>
<label for="horairedisponibilite">Horaire de disponibilité :</label><br/>
<input type="text" name="horairedisponibilite" id="horairedisponibilite"><br/>
<label for="ville"></label><br/>
<select type="role" name="ville" id="ville">
    <option>Kinshasa</option>
    <option>Lubumbashi</option>
</select><br/>
<label for="details">Details sur le service :</label><br/>
<textarea name="details" id="details"></textarea><br/>
<label></label><br/>
<input type="submit" value="Ajouter utilisateur">
</form>
<br/>
<div id="listServices"></div>