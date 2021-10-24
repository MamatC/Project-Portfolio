
<?php

//connexion à la BDD
require_once './back/data.php';

// function splitMyArray(array $input_array, int $size, $preserve_keys = null): array
// {
//     $nr = (int)ceil(count($input_array) / $size);

//     if ($nr > 0) {
//         return array_chunk($input_array, $nr, $preserve_keys);
//     }

//     return $input_array;
// }

//recuperer tous mes projets en BDD

    //première requete recupérant les 6 premiers projets
$sql = 'SELECT * FROM projects LIMIT 6';
$requete = $db->query($sql); //query requete sans qu'on lui fournisse de données
$resultats =$requete->fetchAll(); //tableau associatif contenant tous les résultats trouvés

// $tab_result = splitMyArray($resultats,2);
// var_dump ($tab_result);

    //deuxieme requete récupérant les 6 dernieres images
$sql2 = 'SELECT * FROM projects ORDER BY picture DESC LIMIT 6';
$requete2 = $db->query($sql2); //query requete sans qu'on lui fournisse de données
$resultats2 =$requete2->fetchAll(); //tableau associatif contenant tous les résultats trouvés


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/modal.css">
    <script src="assets/js/projet.js"></script>
    <script src="assets/js/modal.js"></script>
    <title>Portfolio Mathieu Cuenne</title>
</head>
<body>

    <!-- *************************SECTION A PROPOS -->
    <section id="sectionApropos">

        <!-- lien cube -->
        <div class ='centerCube'>
            <a href="./splashScreen.php"><img src="./assets/images/photos/cube-clic.png" alt="cube"></a>
        </div>
        
        <!-- titre a propos -->
        <div class = "positionH1">
            <p>à propos</p>
            <h1>a propos</h1>
        </div>

        <div id="containerCard">
            <!--card 1996-2006 -->
            <div class = "card">
                <div class="cardRight">
                    <div class = "cardLeft" id="cardLeft">
                        <p>1996-2006</p>
                    </div>
                    <p>Formation musicale (piano). Pratique de la musique en groupe pendant 15 ans.</p>
                    <p>Sport étude Hand-ball. Pratique du sport en compétition pendant 20 ans.</p> 
                    <p>Titulaire d’un BAC ES</p>
                </div>
            </div>
            
            <!-- card 2006-2007 -->
            <div class = "card card2">
                <div class="cardRight">
                    <div class = "cardLeft">
                        <p>2006-2007</p>
                    </div>
                    <p> Attiré par les métiers du Web, de la communication et du graphisme j’ai suivi une première formation en IUT à Dijon. </p>  
                    <p>Le DUT Services et Réseaux de Communication m’a permis d’acquérir mes premières compétences dans la conception et la réalisation de produits multimédias.</p>
                </div>
            </div>

            <!-- card 2007-2021 -->
            <div class = "card">
                <div class="cardRight">
                    <div class = "cardLeft ">
                        <p>2007-2021</p>
                    </div>
                    <p>Des choix personnels et familiaux ont dessiné une nouvelle direction professionnelle.</p>
                    <p>En effet, j’ai intégré une société prestataire de santé à domicile en 2007 et durant ces 13 dernières années, j’ai appris à travailler dans le domaine de la santé, j’ai su m’adapter, évoluer, gagner en compétences notamment dans le domaine technique et managériale en suivant plusieurs formations internes. J’ai appris, à gérer une équipe en tant que responsable adjoint, à gérer les urgences, les conflits et à intégrer une forte culture patient.</p>
                </div>
            </div>

            <!-- card 2021 à aujourd'hui -->
            <div class = "card card2">
                <div class="cardRight">
                    <div class = "cardLeft">
                        <p>2021 à aujourd'hui</p>
                    </div>
                    <p>Depuis 2018, j’ai mis en place une veille sur les métiers du digital et leur évolution ainsi que les besoins du marché afin d’envisager une reconversion professionnelle efficiente.</p>
                    <p>Aujourd’hui, je suis en reconversion professionnelle. Je souhaite compléter mes connaissances acquises lors de ma formation suivie en IUT et exercer le métier de Designer Web. Je suis actuellement une formation auprès de l’organisme Access Code School. </p>
                    <p>Je développerai des compétences polyvalentes me permettant de m’adapter aux besoins du marché, tout en continuant à me former et ce, afin de m’adapter aux nouvelles pratiques et nouvelles technologies.</p>
                </div>
            </div>
        </div>
    </section>
    
    
    
    <!-- *************************SECTION COMPETENCES -->
    <section id="sectionCompetences">
        
        <!-- titre Compétences -->
        <div class = "positionH1">
            <p>Compétences</p>
            <h1>Compétences</h1>
        </div>

        <!-- grille logos -->
        <div class="grid">
            <div class="logoTaille"><img src="./assets/images/logos/html.png" alt="logo html"></div>
            <div class="logoTaille"><img src="./assets/images/logos/css.png" alt="logo css"></div>
            <div class="logoTaille"><img src="" alt=""></div>
            <div class="logoTaille"><img src="./assets/images/logos/js.png" alt="logo javascript"></div>
            <div class="logoTaille"><img src="" alt=""></div>
            <div class="logoTaille"><img src="./assets/images/logos/sass.png" alt="logo sass"></div>
            <div class="logoTaille"><img src="./assets/images/logos/bootstrap.png" alt="logo bootstrap"></div>
            <div class="logoTaille"><img src="./assets/images/logos/ps.png" alt="logo photoshop"></div>
            <div class="logoTaille"><img src="./assets/images/logos/ai.png" alt="logo illustrator"></div>
            <div class="logoTaille"><img src="" alt=""></div>
            <div class="logoTaille"><img src="./assets/images/logos/xd.png" alt="logo xd"></div>
            <div class="logoTaille"><img src="" alt=""></div>
            <div class="logoTaille"><img src="./assets/images/logos/php.png" alt="logo php mysql"></div>
            <div class="logoTaille"><img src="./assets/images/logos/git.png" alt="logo github"></div>
            <div class="logoTaille"><img src="" alt=""></div>
            <div class="logoTaille"><img src="./assets/images/logos/vscode.png" alt="logo vscode"></div>
            <div class="logoTaille"><img src="" alt=""></div>
            <div class="logoTaille"><img src="" alt=""></div>
            <div class="logoTaille"><img src="./assets/images/logos/wordpress.png" alt="logo wordpress"></div>
        </div>
    </section>
    


    <!-- *************************SECTION PROJETS -->
    <section id="sectionProjets">
        
        <!-- titre Projets -->
        <div class = "positionProjets">
            <p>Projets</p>
            <h1>Projets</h1>
        </div>
        
        <!-- slider1 -->
        <div class="containerSlide">
            
            <div class="slide">
                <?php foreach($resultats as $projet): ?>
                    <div class="container">
                        <img class="myBtn" data-id="<?php echo $projet['id']; ?>" class="image" src="./assets/uploads/<?php echo $projet['picture']; ?>" alt="photo projet">
                    </div>

                    <!-- *************************MODAL -->
                    <div id="modal-<?php echo $projet['id']; ?>" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">

                            <!-- croix de fermeture du modal -->
                            <span class="close">&times;</span>
                            <h2><?php  echo $projet['title']; ?></h2>
                        
                            <div class="modal-scroll">

                                <img src="./assets/uploads/<?php echo $projet['picture']; ?>" alt="photo projet" id="tailleModal">
                                <p>Date de réalisation : <?php  echo $projet['date_realisation']; ?></p>
                            
                                <p>Technologies utilisées :</p>
                                <div class="gridModal">
                                    <!--<div class="logoTaille"><img src="./assets/images/logos/html.png" alt=""></div>
                                    <div class="logoTaille"><img src="./assets/images/logos/css.png" alt=""></div> -->
                                    <?php  $tech_used = explode(' ', $projet['tech_used']);?>
                                    <?php  foreach($tech_used as $item){
                                    echo  '<img class="logoTaille" src="./assets/images/logos/'.$item.'.png" alt="logo technologies utilisées">';
                                    }
                                    ?>
                                </div>

                                <p>Contexte :</p>
                                <p><?php  echo $projet['description']; ?></p>

                                <p>liens :</p>
                                <div class="content-logo">
                                    <a href="<?php echo $projet['link_web']?>"><img src="./assets/images/logos/ordi.png" alt="" id="tailleOrdi"></a>
                                    <a href="<?php echo $projet['link_git']?>"><img src="./assets/images/logos/github.png" alt="" id="tailleGit"></a>
                                </div>

                            </div>
                        </div>
       
                    </div>
                <?php endforeach; ?>

            </div> 
        </div>

        <div class="containerSlide">
            
            <div class="slide">
                <?php foreach($resultats2 as $projet): ?>
                    <div class="container">
                        <img class="myBtn" data-id="<?php echo $projet['id']; ?>" class="image" src="./assets/uploads/<?php echo $projet['picture']; ?>" alt="photo projet">
                    </div>

                    <!-- *************************MODAL -->
                    <div id="modal-<?php echo $projet['id']; ?>" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">

                            <!-- croix de fermeture du modal -->
                            <span class="close">&times;</span>
                            <h2><?php  echo $projet['title']; ?></h2>
                        
                            <div class="modal-scroll">

                                <img src="./assets/uploads/<?php echo $projet['picture']; ?>" alt="photo projet" id="tailleModal">
                                <p>Date de réalisation : <?php  echo $projet['date_realisation']; ?></p>
                            
                                <p>Technologies utilisées :</p>
                                <div class="gridModal">
                                    <!--<div class="logoTaille"><img src="./assets/images/logos/html.png" alt=""></div>
                                    <div class="logoTaille"><img src="./assets/images/logos/css.png" alt=""></div> -->
                                    <?php  $tech_used = explode(' ', $projet['tech_used']);?>
                                    <?php  foreach($tech_used as $item){
                                    echo  '<img class="logoTaille" src="./assets/images/logos/'.$item.'.png" alt="logo technologies utilisées">';
                                    }
                                    ?>
                                </div>

                                <p>Contexte :</p>
                                <p><?php  echo $projet['description']; ?></p>

                                <p>liens :</p>
                                <div class="content-logo">
                                    <a href="<?php echo $projet['link_web']?>"><img src="./assets/images/logos/ordi.png" alt="" id="tailleOrdi"></a>
                                    <a href="<?php echo $projet['link_git']?>"><img src="./assets/images/logos/github.png" alt="" id="tailleGit"></a>
                                </div>

                            </div>
                        </div>
       
                    </div>
                <?php endforeach; ?>

            </div> 
        </div>
        



        
        <!-- slider2 -->
        <!-- <div class="containerSlide">
            
            <div class="slide">
                <?php /*foreach($resultats2 as $projet): ?> -->
                    <div class="container">
                        <img class="myBtn" class="image" src="./assets/uploads/<?php echo $projet['picture']; ?>" alt="photo projet">
                    </div>
                <?php endforeach; */?>

        //     </div> 
        // </div> -->
        
        
        
        
    
       
          

    </section>
    



    <!-- *************************SECTION CV -->
    <section id="sectionCV">

        <!-- titre CV -->
        <div id="containerCV">
            <div id="titreCV">
                <div class = "positionCV">
                    <p>CV</p>
                    <h1>CV</h1>
                </div>
            </div>
            <div id="divLeftCV" >
                <a href="./assets/images/CV-Mathieu-Cuenne.pdf"><img id="cv" src="./assets/images/CV-Mathieu-Cuenne.jpg" alt=""></a>
            </div>
        </div>
    </section>


    
    <!-- *************************SECTION CONTACT -->
    <section id="sectionContact">

        <!-- titre contact -->
        <div class = "positionH1">
            <p>Contact</p>
            <h1>Contact</h1>
        </div>

        <!-- timbre -->
        <div id="timbre">
            <img src="./assets/images/logos/tampon.svg" alt="" srcset="">
            <img src="./assets/images/logos/timbre1.svg" alt="" srcset="">
        </div>
        
        <form method="post">

            <div id="message"> 
                <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
            </div>

            <div id="contactRight">
                <input type="text" placeholder="Nom / Prénom">
                <input type="mail" placeholder="Email">
                <input id="btn"type="submit" value="Envoyer">
            </div>


        </form>
    </section>

    <footer>

    </footer>

</body>
</html>