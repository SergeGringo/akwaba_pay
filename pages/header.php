<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../slick/slick.css">
    <link rel="stylesheet" href="../slick/slick-theme.css">
    <link rel="stylesheet" href="../css/mobil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <title>
        <?php
        if (isset($title)) {
            echo $title;
        }
        ?>
    </title>
</head>

<body id="important">
    <nav class="my_nav navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../pictures/Akwaba_pay.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="cacheur collapse navbar-collapse" id="navbarText">
                <ul class="liste navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item element2">
                        <a class="nav-link active" aria-current="page" href="#" id="link1">clients privés</a>
                    </li>
                    <li class="nav-item element2">
                        <a class="nav-link" href="#" id="link2">clients commerciaux</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                       </li> -->

                </ul>
                <span class="next navbar-text">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item spe1" id="open"><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                        <li class="nav-item spe "><a href="#" class="atlas"><button type="button" class="btn btn-lg atlas" disabled>Download
                                    Akwaba pay</button></a></li>
                        <li class="nav-item "><a href="#">
                                <select class="selector">
                                    <option value="Français">FR</option>
                                    <option value="anglais">ANG</option>
                                    <option value="allemand">ALL</option>
                                    <option value="espagnol">ITL</option>
                                </select>
                            </a>
                        </li>
                    </ul>
                </span>
                <div class="div_abc septs">
                    <div class="submenu">
                        <div class="row  tout">
                            <div class="images col-lg-3">
                                <div class="test">
                                    <!-- <img src="../pictures/Fraud-Briefe_Teaser@2x-500x750.webp" alt="fraude"> -->
                                    <div class="degrade">
                                        <div class="warn">
                                            <p>Attention aux </p>
                                            <p>courriers</p>
                                            <p>frauduleux</p>
                                            <div class="arrow">
                                                <div class="circle_arrow">
                                                    <a href="#">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bigone col-lg-9">
                                <div class="row col-lg-12">
                                    <div class="col-lg-3">
                                        <div class="contenu">
                                            <h4 class="titres">Payez avec twint</h4>
                                            <ul class="reseach">
                                                <li>
                                                    <div class="reset1" id="doit1">
                                                        <h5 class="modificator">
                                                            Sur place
                                                        </h5>
                                                        <i class="fa-solid fa-angle-down" id="khan"></i><i
                                                            class="fa-solid fa-angle-up" id="unos"></i>
                                                    </div>
                                                    <div class="sotitre" id="sotitre">

                                                        <div class="itemed">
                                                            <a href="#">bonjour</a>
                                                            <a href="#">bonsoir</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="reset2" id="doit2">
                                                        <p class="modificator">Online
                                                        </p>
                                                        <i class="fa-solid fa-angle-down bayer" id="gnon"></i><i
                                                            class="fa-solid fa-angle-up" id="doss"></i>
                                                    </div>

                                                    <div class="logaret" id="logaret">
                                                        <div class="itemed">
                                                            <a href="#">salut</a>
                                                            <a href="#">coucou</a>
                                                            <a href="#">aller</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>

                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="contenu">
                                            <h4 class="titres">Autres fonctions</h4>
                                            <ul class="reseach">
                                                <!-- <li>
                                                    <div class="reset1" id="doit1">
                                                        <h5 class="modificator">
                                                            Sur place
                                                        </h5>
                                                        <i class="fa-solid fa-angle-down" id="khan"></i><i
                                                            class="fa-solid fa-angle-up" id="unos"></i>
                                                    </div>
                                                    <div class="sotitre" id="sotitre">

                                                        <div class="itemed">
                                                            <a href="#">bonjour</a>
                                                            <a href="#">bonsoir</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="reset2" id="doit2">
                                                        <p class="modificator">Online
                                                        </p>
                                                        <i class="fa-solid fa-angle-down bayer" id="gnon"></i><i
                                                            class="fa-solid fa-angle-up" id="doss"></i>
                                                    </div>

                                                    <div class="logaret" id="logaret">
                                                        <div class="itemed">
                                                            <a href="#">salut</a>
                                                            <a href="#">coucou</a>
                                                            <a href="#">aller</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>

                                                </li> -->

                                                <li>
                                                    <div class="reset3" id="doit3">
                                                        <h5 class="modificator">
                                                            Mobilité
                                                        </h5>
                                                        <i class="fa-solid fa-angle-down rez" id="zan"></i><i
                                                            class="fa-solid fa-angle-up" id="tress"></i>
                                                    </div>

                                                    <div class="stooppeur" id="stooppeur">

                                                        <div class="itemed">
                                                            <a href="#">bonjour</a>
                                                            <a href="#">bonsoir</a>
                                                            <a href="#">bonsoir</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="reset4" id="doit4">
                                                        <h5 class="modificator">
                                                            Assurance
                                                        </h5>
                                                        <i class="fa-solid fa-angle-down" id="nan"></i><i
                                                            class="fa-solid fa-angle-up" id="qatro"></i>
                                                    </div>

                                                    <div class="publieur" id="publieur">
                                                        <div class="itemed">
                                                            <a href="#">bonjour</a>
                                                            <a href="#">bonsoir</a>
                                                            <a href="#">bonsoir</a>
                                                            <a href="#">bonsoir</a>
                                                            <a href="#">bonsoir</a>
                                                        </div>
                                                    </div>
                                                <li>
                                                    <div class="reset6" id="doit6">
                                                        <h5 class="modificator">
                                                            TWINT en Chiffre
                                                        </h5>
                                                        <i class="fa-solid fa-angle-down" id="nou"></i>
                                                        <i class="fa-solid fa-angle-up" id="cinqo"></i>
                                                    </div>

                                                    <div class="alterteurs" id="alerteurs">
                                                        <div class="itemed">
                                                            <a href="#">bonjour</a>
                                                            <a href="#">bonsoir</a>
                                                            <a href="#">bonsoir</a>
                                                            <a href="#">bonsoir</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>

                                                </li>


                                                <!-- <li>
                                                    <div class="reset7" id="doit7">
                                                        <p class="modificator">Quel est le coût de ce service ?</p><i
                                                            class="fa-solid fa-angle-down" id="blou"></i><i
                                                            class="fa-solid fa-angle-up" id="sixo"></i>
                                                    </div>

                                                    <div class="freeserv" id="freeserv">
                                                        <p>Le service est gratuit. Vous n'avez pas non plus besoin de
                                                            vous connecter pour créer des alertes, il suffit que nous
                                                        </p>
                                                        <p>ayons votre adresse e-mail pour pouvoir vous envoyer les
                                                            notifications.</p>


                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="reset8" id="doit8">
                                                        <p class="modificator">Mes alertes du site web et de l'app
                                                            d'Acheter-louer-ci vont-elles être synchronisées ?</p><i
                                                            class="fa-solid fa-angle-down" id="sien"></i><i
                                                            class="fa-solid fa-angle-up" id="septo"></i>
                                                    </div>

                                                    <div class="buythey" id="buythey">
                                                        <p>La synchronisation n'est pas encore possible mais nous y
                                                            travaillons</p>

                                                    </div>
                                                </li> -->
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="contenu">
                                            <h4 class="titres">C'est TWINT</h4>
                                            <ul class="reseach">

                                                <li>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="contenu">
                                            <h4 class="titres">C'est TWINT</h4>
                                            <ul class="reseach">

                                                <li>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="div_abc astre">
                    <div class="submenu">
                        <div class="row  tout">
                            <div class="images col-lg-3">
                                <div class="testons">
                                    <!-- <img src="../pictures/Fraud-Briefe_Teaser@2x-500x750.webp" alt="fraude"> -->
                                    <div class="degrade">
                                        <div class="warne">

                                            <p>Nouveau: Code QR </p>
                                            <p>avec des </p>
                                            <p>informations liées</p>
                                            <p>au paiement</p>
                                            <div class="arrow">
                                                <div class="circle_arrow">
                                                    <a href="#">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bigone stell col-lg-9">
                                <div class="row col-lg-12">
                                    <div class="col-lg-3">
                                        <div class="contenu">
                                            <h4 class="titres">Nos solutions</h4>
                                            <ul class="reseach">
                                                <li>
                                                    <div class="reset7" id="doit7">
                                                        <h5 class="modificator">Sur place</h5><i
                                                            class="fa-solid fa-angle-down" id="blou"></i><i
                                                            class="fa-solid fa-angle-up" id="sixo"></i>
                                                    </div>

                                                    <div class="freeserv" id="freeserv">
                                                        <div class="itemed">
                                                            <a href="#">bonjour</a>
                                                            <a href="#">bonsoir</a>
                                                            <a href="#">bonsoir</a>
                                                            <a href="#">bonsoir</a>
                                                            <a href="#">bonsoir</a>
                                                        </div>


                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="reset8" id="doit8">
                                                        <h5 class="modificator">En ligne</h5><i
                                                            class="fa-solid fa-angle-down" id="sien"></i><i
                                                            class="fa-solid fa-angle-up" id="septo"></i>
                                                    </div>

                                                    <div class="buythey" id="buythey">
                                                        <div class="itemed">
                                                            <a href="#">bonjour</a>
                                                            <a href="#">bonsoir</a>
                                                            <a href="#">bonsoir</a>
                                                            <a href="#">bonsoir</a>
                                                            <a href="#">bonsoir</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="reset9" id="doit9">
                                                        <h5 class="modificator">solutions spéciales</h5><i
                                                            class="fa-solid fa-angle-down" id="kotokou"></i><i
                                                            class="fa-solid fa-angle-up" id="neufo"></i>
                                                    </div>

                                                    <div class="burneur" id="burneur">
                                                        <div class="itemed">
                                                            <a href="#">bonjour</a>
                                                            <a href="#">bonsoir</a>
                                                            <a href="#">bonsoir</a>
                                                            <a href="#">bonsoir</a>
                                                            <a href="#">bonsoir</a>
                                                        </div>

                                                    </div>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="contenu">
                                            <h4 class="titres">Société</h4>
                                            <ul class="reseach">
                                                <li>



                                                <li>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>


                                                </li>


                                                <!-- <li>
                                                    <div class="reset7" id="doit7">
                                                        <p class="modificator">Quel est le coût de ce service ?</p><i
                                                            class="fa-solid fa-angle-down" id="blou"></i><i
                                                            class="fa-solid fa-angle-up" id="sixo"></i>
                                                    </div>

                                                    <div class="freeserv" id="freeserv">
                                                        <p>Le service est gratuit. Vous n'avez pas non plus besoin de
                                                            vous connecter pour créer des alertes, il suffit que nous
                                                        </p>
                                                        <p>ayons votre adresse e-mail pour pouvoir vous envoyer les
                                                            notifications.</p>


                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="reset8" id="doit8">
                                                        <p class="modificator">Mes alertes du site web et de l'app
                                                            d'Acheter-louer-ci vont-elles être synchronisées ?</p><i
                                                            class="fa-solid fa-angle-down" id="sien"></i><i
                                                            class="fa-solid fa-angle-up" id="septo"></i>
                                                    </div>

                                                    <div class="buythey" id="buythey">
                                                        <p>La synchronisation n'est pas encore possible mais nous y
                                                            travaillons</p>

                                                    </div>
                                                </li> -->
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="contenu">
                                            <h4 class="titres">Assistance</h4>
                                            <ul class="reseach">

                                                <li>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>
                                                    <h5 class="squid">
                                                        <a href="#">Entre amis</a>
                                                    </h5>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="abs">
                                            <a href="#">Login commerçant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="modale">
        <div class="modal_header">
            <i class="fa-solid fa-xmark" id="closed"></i>
        </div>
        <div class="modal_corp">
            <form action="">
                <div class="chared">
                    <input type="text" name="search" id="searchInput" placeholder="Entrer le terme de votre recherhe">
                </div>
            </form>
        </div>
    </div>