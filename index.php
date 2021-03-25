<?php require_once("includes/header.inc.php"); ?>


<div class="landingTop">

    <div class="infoTop" uk-scrollspy="target: img, #map, #phone; cls: uk-animation-slide-top;delay: 300; repeat: true">
        
        <img uk-scrollspy="uk-animation-slide-top" src="images/logo.svg" alt="logo">
        
        <div uk-scrollspy="uk-animation-slide-top" id="map">
            <i class="fas fa-map-marked-alt map"></i>
            <p>6 Avenue des prés, Annecy</p>
        </div>
            
        <div uk-scrollspy="uk-animation-slide-top" id="phone">
            <i class="fas fa-phone-alt phone"></i>
            <p>+33 6 58 22 11 47</p>
        </div>
        
    </div>
    

    <div class="firstPart">
            
        <h1 class="uk-animation-slide-bottom-small">Bienvenue à Fitness Paradise !</h1>
        <hr>
        <h3 class="uk-animation-slide-top-small">Un cours d'essai gratuit</h3>
            
        <form  class="uk-animation-slide-left" action="" method="POST">
                
            <div class="uk-inline mail">
                <span class="uk-form-icon emailIcon" uk-icon="icon: mail; ratio: 2"></span>
                <input type="email" class="email" id="email">
            </div>
                
                
            <input type="submit" value="S'INSCRIRE !">
                
        </form>

        <div class="social" uk-scrollspy="target: > a; cls: uk-animation-fade; repeat: true">

            <a href="https://www.instagram.com/fitness.paradise_annecy/?hl=fr" target="_blank"  uk-scrollspy-class="uk-animation-scale-up"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/FitnessParadise74" target="_blank" uk-scrollspy-class="uk-animation-scale-up"><i class="fab fa-facebook-square"></i></a>

        </div>
            
    </div>
        

</div>

<div class="info">

    <h3 class="uk-animation-slide-top">NOS AVANTAGES</h3>

    <div class="advantages" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 200">
        
        <div uk-scrollspy-class="uk-animation-slide-top" class="info1">
            <i class="fas fa-calendar-check"></i>
            <h5>Ouvert de 6h à 00h</h5>
            <p>du Lundi au Dimanche</p>
        </div>
        
        <div uk-scrollspy-class="uk-animation-slide-bottom" class="info2">
            <i class="fas fa-credit-card"></i>
            <h5>Sans engagement</h5>
            <p>résiliation possible à tout moment</p>
        </div>
        
        <div uk-scrollspy-class="uk-animation-slide-top" class="info3">
            <img src="images/icons/coach.svg" alt="coach Icon" class="coach">
            <h5>Coachs Sportifs</h5>
            <p>du Lundi au Samedi</p>
        </div>


    </div>


</div>

<div class="coachPart">

    <div class="coachText" uk-scrollspy="target: h1, h3; cls: uk-animation-fade; delay: 200;">
             
        <h1 uk-scrollspy-class="uk-animation-slide-bottom-small">Nos coachs sportif</h1>
        <hr>
        <h3 uk-scrollspy-class="uk-animation-slide-top-small">Michael & Alice disponibles pour vous suivre dans vos séances et vous aider.</h3>
            
    </div>

</div>

<div class="offersPart">

    <h3>Tarifs & Parrainage</h3>

    <div class="allOffers" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 500">

        <div class="offer offer1" uk-scrollspy-class="uk-animation-slide-left">

            <h3>Offre 3 mois</h3>
            <p>*Sans engagement</p>

            <hr>

            <h3 id="oldPrice">29,99 €</h3>
            <i></i>

            <div class="offerPrice">
                <i class="fas fa-caret-right"></i>
                <h3>19,99 €</h3>
                <i class="fas fa-caret-left"></i>
            </div>

            <hr>

            <div class="offerPrice2">
                <h3>89,97 €</h3>
                <i class="fas fa-chevron-right"></i>
                <h3 id="scndOfferPrice2">59,97 €</h3>
            </div>

            <br>

            <div class="infoOffer">

                <p>Bénéficiez de <b>30€</b> de réduction pour vos trois premier mois chez nous !</p>
            
            </div>

        </div>


        <div class="offer offer2" uk-scrollspy-class="uk-animation-slide-left">

            <h3>Offre 12 mois</h3>
            <p>*Avec engagement</p>

            <hr>

            <h3 id="oldPrice">29,99 €</h3>
            <i></i>

            <div class="offerPrice">
                <i class="fas fa-caret-right"></i>
                <h3>19,99 €</h3>
                <i class="fas fa-caret-left"></i>
            </div>

            <hr>

            <div class="offerPrice2">
                <h3>359,88 €</h3>
                <i class="fas fa-chevron-right"></i>
                <h3 id="scndOfferPrice2">239,88 €</h3>
            </div>

            <br>
            <div class="infoOffer">

                <p>Bénéficiez de <b>120€</b> de réduction pour un an passé chez nous !</p>

            </div>
        </div>


        <div class="offer offer3" uk-scrollspy-class="uk-animation-slide-left">

            <h3>Offre 24 mois</h3>
            <p>*Avec engagement</p>

            <hr>

            <h3 id="oldPrice">29,99 €</h3>
            <i></i>

            <div class="offerPrice">
                <i class="fas fa-caret-right"></i>
                <h3>15,99 €</h3>
                <i class="fas fa-caret-left"></i>
            </div>

            <hr>

            <div class="offerPrice2">
                <h3>719,76 €</h3>
                <i class="fas fa-chevron-right"></i>
                <h3 id="scndOfferPrice2">383,76 €</h3>
            </div>

            <br>

            <div class="infoOffer">

                <p>Bénéficiez de <b>336€</b> de réduction pour vos trois premier mois chez nous</p>
                
            </div>
        </div>

    </div>

    <div class="infoCard">

        <h3>*Si vous êtes parrainé les frais d'inscriptions seront offerts</h3>
        <h4>Le parrain bénéficiera de -10% pendant 3 mois</h4>
    
    </div>

</div>

<div class="footer">

    <div class="footerPart1">

        <img src="images/logo.svg" alt="logo footer">
        <div class="footerPart1DIV">
        <i class="fas fa-map-marked-alt mapFooter"></i>
            <p>6 Avenue des prés, Annecy</p>
        </div>
        <div class="footerPart1DIV">
            <i class="fas fa-phone-alt phoneFooter"></i>
            <p>+33 6 58 22 11 47</p>
        </div>
        <div class="footerPart1DIV">
            <i class="fas fa-envelope mailFooter"></i>
            <p>fitnessparadise@gmail.com</p>
        </div>
        
    </div>
    <span class="separation"></span>
    <div class="footerPart2">

        <h3>Fitness Paradise</h3>
        <p>Accueil</p>
        <p>Avantages</p>
        <p>Tarifs</p>

    </div>
    <span class="separation"></span>
    <div class="footerPart3">

        <h3>Nous Suivre</h3>
        <div>
            <a href="https://www.facebook.com/FitnessParadise74" target="_blank"  ><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/fitness.paradise_annecy/?hl=fr" target="_blank"  ><i class="fab fa-instagram"></i></a>
        </div>
        <p>Recevez nos actualités</p>
        <form action="" method="POST">
            <input type="email" class="footerMail" placeholder="votre email">
            <input type="submit" value="OK" class="footerSub">
        </form>

    </div>


</div>



<?php require_once("includes/footer.inc.php"); ?>