<?php
    require ('include/steamauth/steamauth.php');  
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Altérisia</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="js/index.js"></script> <!-- [renseigner le futur js] -->
    </head>
        <body>
         <img class="logo_beta" src="img/beta_logo.png">
         <div class="pour_le_footer">
            <header class="header"> <!-- [Header global logo, nom site et login API steam] -->
                <section class="header_contenu"><!-- [Contenu du header avec les different bloc] -->
                    <div class="logo_nom"><!-- [logo nom png] -->
                        <img class="img_nom" src="img/logo.png">
                    </div>
                    <div class="login"><!-- [login steam API pour les sessions] -->
<?php

                            if(!isset($_SESSION['steamid'])) {

                                //echo "welcome guest! please login \n \n";?>
                                <div class="login_bouton"><?php steamlogin();?></div>
<?php
                                
                            }  else {
                                include ('include/steamauth/userInfo.php');

                                //Protected content
?>
                                <div class="connected">
                                <div class="pseudo_steam"><?php echo $steamprofile['personaname'];?></div>
                                <div class="logout_bouton"><?php logoutbutton();?></div>
                                </div>
<?php
                            }    
?>  
                    </div>
                </section>
            </header>
                <section class="contenu_page"><!-- [Contenu de la page avec les differents blocs serveur] -->
                    <div class="serveur_liste"><!-- [Bloc serveur] -->
                     <div class="image-haut">
                     <img class="logo_serveur-1" src="img/serveur/bg3.png">
                     <img class="logo_serveur-2" src="img/serveur/bg.png">
                     </div>
                        <img class="logo_serveur-3" src="img/serveur/bg2.png">
                    </div>
                    <div class="bt-forum"><!-- [bouton forum] -->
                        
                    </div>
                </section>
        </div>
            <footer class="footer"><!-- [Footer global] -->
                    <div class="footer_info"><!-- [Footer avec info defilante] -->
                        <marquee direction="right" scrollamount="10">Made by Kevin Torre and Julien Thomas</marquee>
                    </div>
                    <div class="copyright"><!-- [Footer copyright] -->
                        Copyright Altérisia 2015-2016 ©
                    </div>
            </footer>
            <!--<div style="visibility:hidden;" id="music"><embed src="musique/1.mp3" autostart=true loop=true></div>-->
        </body>

</html>