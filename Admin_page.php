<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../../style/css/bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/css/font/css/font-awesome.min.css">
    <link href="../../style/lib/animate/animate.min.css" rel="stylesheet">

</head>
<body>
<div class="container-fluid">
    <div class="row navbar-fixed-top">
        <div class="jumbotron">
            <div class="col-xs-2 col-lg-3">
                <h2 style="margin-top: -18px;position: relative"> Logo</h2>
            </div> <div class="col-xs-8 col-lg-6">
                <h3 style="font-family: 'Century Gothic'; margin-top: -18px; position: relative; text-align: center">Annuaires annexes</h3>

            </div> <div class="col-xs-2 col-lg-3">

            </div>
        </div>
    </div>
    <br><br><br><br>
    <div class="container" style="margin-top:; position: relative">
        <div class="row" style="background-color: black; opacity: 0.8" >
            <nav class="navbar" style="background-color: #b9d331">
                <div class="navbar-header">
                    <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="icon-bar" style="background-color: white"></span>
                        <span class="icon-bar" style="background-color: white"></span>
                        <span class="icon-bar" style="background-color: white"></span>
                    </button>
                    <a class="navbar-brand" data-toggle="modal"href="index.php" STYLE="background-color: black; color: white; font-family: 'Century Gothic'" >Rechercher</a>
                </div>
                <div class="collapse navbar-collapse" id="menu">

                    <ul class="nav navbar-nav " >


                        <li ><a href="" class="amenu glyphicon glyphicon" style="background-color: gray; color: white;font-family: 'Century Gothic'">Annuaires</a></li>
                        <li ><a href="" class="amenu glyphicon glyphicon" style="background-color: gray;color: white;font-family: 'Century Gothic'">Catégories</a></li>
                    </ul>
                </div>

            </nav>
            <div class="col-lg-6" >

            </div>
            <div class="col-lg-6">
                <form action="" method="get" style=" margin-top: ; position: relative;">
                    <span class="input-group">
                        <input type="search" placeholder="Rechercher en mentionnant  deux  lettres de votre produit" value="" class="form-control" name="recherche">
                        <span class="input-group-btn">
                            <button class="btn  btn btn-link"  data-toggle="tooltip" title="Notre monnaie virtuelle a augmenté de Mayo  " data-placement="right" title="Rechercher" style="background-color: #b9d331;color: white">
                                <span class="fa fa-search">Rechercher</span>
                            </button>
                        </span>
                    </span>
                </form>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="ville" class="label-white" style="color: white; font-family: 'Century Gothic'">Votre pays de residence : </label>
                        <select type="role" name="pays" id="menu-pays"  class="form-control"  onChange="townListToMenu(this.value);">
                            <option value="">Sélectionnez le pays</option>

                        </select>
                    </div> <div class="col-lg-6">
                        <label for="ville" class="label-white" style="color: white;font-family: 'Century Gothic'">Votre ville : </label>
                        <select type="role" name="ville" id="menu-ville" class="form-control">
                            <option value="">Sélectionnez la ville</option>
                        </select>
                    </div>
                </div>

                <br>

            </div>
        </div>
        <h4 style="font-family: 'Century Gothic'">Annuiares annexes > <span style="color: #b9d331; font-weight: bold">Administration</span></h4>
<h3 style="font-family: 'Century Gothic'">Tableau de bord</h3>
        <div class="row" style="background-color: black; opacity: 0.8">
            <div class="col-xs-6 col-lg-6 text-center" style="border-right: 8px solid white">
                <br><br><br><br>
                <span style="color: white; font-size: 50px">15</span>
                <div class="row">
                    <div class="col-xs-6 col-lg-6 text-center">
                        <span style="font-family: 'Century Gothic'; font-size: 30px; color: white; font-weight: bold">Catégorie</span>
                    </div>
                    <div class="col-lg-6" >
                        <button class="btn btn-link" style="background-color: white" >

                        <a href="" class="btn btn-link" style="border-radius: 120px; border: 1px solid dodgerblue" data-toggle="tooltip" title="     Ajouter une Catégorie     "><span style="font-size:30px; color: dodgerblue" class="fa fa-plus" ></span></a>
                        <a href="" class="btn btn-link" style="border-radius: 120px; border: 1px solid black"><span style="font-size:30px; color: black" class="fa fa-question" ></span></a>
                        </button>
                    </div>
                    <br><br><br><br>
                </div>
            </div>  <div class="col-xs-6 col-lg-6 text-center">
                <br><br><br><br>

                <span style="color: white; font-size: 50px">31</span>
                <div class="row">
                    <div class="col-xs-6 col-lg-6 text-center">
                        <span style="font-family: 'Century Gothic'; font-size: 30px; color: white; font-weight: bold">Services</span>
                    </div>  <div class="col-lg-6">
                        <button class="btn btn-link" style="background-color: white"  title="Ajouter un Service">


                            <a href="#rserve"  data-toggle="modal" class="btn btn-link" style="border-radius: 120px; border: 1px solid dodgerblue" ><span style="font-size:30px; color: dodgerblue" class="fa fa-plus"></span></a>
                            <a href="" class="btn btn-link" style="border-radius: 120px; border: 1px solid black"><span style="font-size:30px; color: black" class="fa fa-question"></span></a>
                        </button>
                    </div>
                    <br><br><br><br>

                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-2 col-lg-4">

            </div>  <div class="col-xs-4 col-lg-2">

               <h4 style="font-family: 'Century Gothic'; text-align: center">Afficher</h4>
            </div>
            <div class="col-xs-4 col-lg-2">
                <select type="role" name="ville" id="menu-ville" class="form-control" style="color: dodgerblue">
                    <option value="">Utilisateurs</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                </select>
            </div>
            <div class="col-xs-2  col-lg-4">

            </div>
        </div>
        <div class="row">
            <div class="col-xs-8 col-lg-8">

            </div>
            <div class="col-lg-2">

            </div>
            <div class="col-lg-2">
                <div class=" text-center" style="background-color: black;opacity: 0.8">

                    <span style="font-family: 'Century Gothic'; font-size: 15px; color: white; font-weight: bold">Utilisateurs
                    <br> 8 </span><br>
                    <button class="btn-xs btn-link" style="background-color: white" >

                        <a href="" class="btn btn-link" style="border-radius: 120px; border: 1px solid dodgerblue" data-toggle="tooltip" title="     Ajouter une Catégorie     "><span style="font-size:30px; color: dodgerblue" class="fa fa-plus" ></span></a>
                        <a href="" class="btn btn-link" style="border-radius: 120px; border: 1px solid black"><span style="font-size:30px; color: black" class="fa fa-question" ></span></a>
                    </button>
                    <br><br>
                </div>
                <br>   <div class=" text-center" style="background-color: black;opacity: 0.8"><br>
                    <button class="btn-xs btn-link" style="background-color: white" >

                        <a href="" class="btn btn-link" style="border-radius: 120px; border: 1px solid dodgerblue" data-toggle="tooltip" title="     Ajouter une Catégorie     "><span style="font-size:30px; color: dodgerblue" class="fa fa-crop" ></span></a>
                    </button> <br>
                    <span style="font-family: 'Century Gothic'; font-size: 15px; color: white; font-weight: bold">Signaler un
                    beug</span><br>

                    <br>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="modal" id="rserve">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center " id="apropos" >

                        <h4 style="font-family: 'Century Gothic'">AJouter un nouveau service <button class="fa fa-close btn btn-link" data-dismiss="modal" id="clique" style="background-color: ; color: black">

                        </button></h4>

                </div>
                <div class="modal-body" >
                    <form action="./Controleurlr/controleur_reponse.php" method="post" style="color: black" class="well">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">
                                    </label>
                                    <input type="text" class="form-control"  placeholder="Nom du Service " name="nom">
                                </div>
                                <div class="form-group">
                                    <label for="">

                                    </label>
                                    <input type="text" name="prof" class="form-control" placeholder="Adresse mail">
                                </div>
                            </div>    <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">
                                    </label>
                                    <input type="text" class="form-control"  placeholder=" Téléphone" name="tel">
                                </div>
                                <div class="form-group">
                                    <label for="">
                                    </label>
                                    <select name=""  class="form-control"  placeholder="Numéro de téléphone">
                                        <option value="">Catégorie</option>
                                        <option value="">Catégorie</option>
                                        <option value="">Catégorie</option>
                                        <option value="">Catégorie</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="text-center" style="font-family: 'Century Gothic'">Localisez le service</h4>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">

                                    </label>
                                    <select name=""  class="form-control"  placeholder="Numéro de téléphone">
                                        <option value=""> Pays</option>
                                        <option value=""> Pays</option>
                                        <option value=""> Pays</option>
                                        <option value=""> Pays</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">

                                    </label>
                                    <select name=""  class="form-control"  placeholder="Numéro de téléphone">
                                        <option value="">Ville</option>
                                        <option value="">Ville</option>
                                        <option value="">Ville</option>
                                        <option value="">Ville</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Adresse Physique" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Horaire de Disponibilité" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="DEscription du service"></textarea>
                        </div>

<div class="form-group">
    <button class="btn btn-link form-control" style="background-color: #b9d331"><h4 style="color: black; font-family: 'Century Gothic'; font-weight: bold; margin-top: -3px; position: relative">Ajouter les services</h4></button>
</div>

                    </form>
                </div>

            </div>

        </div>
    </div>
    <div class="row" style="background-color: #b9d331">
        <br>
    </div>
        </div>

<script src="../../style/lib/jquery/jquery.min.js"></script>
<script src="../../style/lib/jquery/jquery.timeago.js"></script>
<script src="../../style/lib/jquery/jquery.timeago.fr.js"></script>
<script src="../../style/lib/jquery/jquery.livequery.min.js"></script>
<script src="../../style/lib/bootstrap/js/bootstrap.min.js"></script>

<script>
    $('[data-toggle="tooltip"]').tooltip();
</script>
<script type="text/javascript" src="../../style/js/jquery.min.js"></script>

<script src="../../style/js/jquery.min.js"></script>
</body>
</html>