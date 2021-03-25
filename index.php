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
            
        <form  class="uk-animation-slide-left" action="POST">
                
            <div class="uk-inline mail">
                <span class="uk-form-icon emailIcon" uk-icon="icon: mail; ratio: 2"></span>
                <input type="email" class="email" id="email">
            </div>
                
                
            <input type="submit" value="S'INSCRIRE !">
                
        </form>
            
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

    <div class="coachText">
             
        <h1 class="uk-animation-slide-bottom-small">Nos coachs sportif</h1>
        <hr>
        <h3 class="uk-animation-slide-top-small">Michael & Alice disponibles pour vous suivre dans vos séances et vous aider.</h3>
            
    </div>

</div>

<div>








</div>





<?php require_once("includes/footer.inc.php"); ?>