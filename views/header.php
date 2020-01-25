<?php
//Here we are already inside the view...
;?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=isset($this->title) ? $this->title : "Annuaires annexes";?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo URL;?>style/css/main.css" />
    <?php //The advice is to use jquery google cdn?>
    <script src="<?php echo URL;?>scripts/js/jquery.min.js"></script>
    <script src="<?php echo URL;?>scripts/js/bootstrap.min.js"></script>
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
    <a href="<?php echo URL;?>index">Home</a>
    <a href="<?php echo URL;?>service">Service</a>
    <a href="<?php echo URL;?>categorie">Categorie</a>
</div>
<div id="content">