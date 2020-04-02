<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=isset($this->title) ? $this->title : "Annuaires annexes";?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo URL;?>style/css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo URL;?>style/css/menu.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo URL;?>style/css/bootstrap.css" />
    <?php //The advice is to use jquery google cdn?>
    <script src="<?php echo URL;?>scripts/js/jquery.min.js"></script>
    <script src="<?php echo URL;?>scripts/js/bootstrap.min.js"></script>
    <script src="<?php echo URL;?>scripts/js/fontawesome.js"></script>
    <script src="<?php echo URL;?>scripts/js/menu.js"></script>
    <?php
        if (isset($this->js)){
            //including js file from model lis
            foreach ($this->js as $js) {
                echo '<script src="'.URL.$js.'"></script>';
            }
        }
    ?>
</head>
<body>
<div id="header">
    <h2>Annuaires annexes</h2>
    <a href="<?php echo URL;?>index">Annuaires</a>
    <a href="<?php echo URL;?>service">Tous les services</a>

    <br/><br/>

    <! --Mega menu start-->

    <! --Mega menu end-->

<label for="ville" class="label-white">Votre pays de residence : </label>
<select type="role" name="pays" id="menu-pays" onChange="townListToMenu(this.value);">
    <option value="">Sélectionnez le pays</option>
    <! -- List the city's names from database here -->
    <?php echo Utils::arrayItemToList($this->paysNameList); ?>

</select>
<label for="ville" class="label-white">Votre ville : </label>
<select type="role" name="ville" id="menu-ville">
    <option value="">Sélectionnez la ville</option>
    <! -- List the city's names from database here -->
    <! -- Only if they are located in the selected country -->
</select>
<button>Localiser les services chez vous</button>

</div>


<div id="content">