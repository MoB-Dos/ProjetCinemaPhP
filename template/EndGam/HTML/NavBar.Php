<?php

session_start ();


if (isset($_SESSION['login'])) {

?>

<header class="header-section">

<div class="header-warp">
    <div class="header-social d-flex justify-content-end">
        <p>Suivez nous :</p>
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-behance"></i></a>
    </div>
    <div class="header-bar-warp d-flex">
        <!-- site logo -->
        <a href="home.html" class="site-logo">
            <img src="./img/logo.png" alt="">
        </a>
        <nav class="top-nav-area w-100">

        <div class="user-panel">
                <a href="../../../Traitement/User/deco.php">Deconnexion</a> / <?php echo $_SESSION['login'] ?>
        </div>

            <!-- Menu -->
            <ul class="main-menu primary-menu">
                <li><a  href="home.php">Accueil</a></li>
                <li><a href="films.php">Films</a></li>
                <li><a href="Reservation.php">Reserver une place </a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="Affichage.php">Affichage</a></li>
                
                <?php
                if ($_SESSION['admin'] == 1)
                {
                ?>    
                    <li><a href="PanelAdmin.php">Panel Admin</a></li>
                
                <?php
                }
                ?>  

             </ul>
        </nav>
    </div>
</div>

 </header>
<?php
} else {
    ?>

    <header class="header-section">

<div class="header-warp">
    <div class="header-social d-flex justify-content-end">
        <p>Suivez nous :</p>
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-behance"></i></a>
    </div>
    <div class="header-bar-warp d-flex">
        <!-- site logo -->
        <a href="home.php" class="site-logo">
            <img src="./img/logo.png" alt="">
        </a>
        <nav class="top-nav-area w-100">
            
            <div class="user-panel">
                <!--<a href="../../../View/User/Connexion.html">Se connecter</a> / <a href="../../../View/User/Inscription.html">S'inscrire</a>-->

                <nav class="top-nav-area w-100">
					<div class="user-panel">
						<a href="#modal1" class="js-modal">Connexion / Inscription</a>
						<meta charset="UTF-8">
						<meta name="viewport" content="width=device-width, initial-scale=1.0">
						<meta http-equiv="X-UA-Compatible" content="ie=edge">
						  <style>
						.modal{position:fixed;display:flex;align-items:center;justify-content:center;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.8);animation:fadeIn .3s both}.modal-wrapper{overflow:auto;width:600px;max-width:calc(100vw - 20px);max-height:calc(100vh - 20px);padding:20px;background-color: #0c062e;animation:slideFromTop .3s both}.modal[aria-hidden=true]{animation-name:fadeOut}
						</style>



						<aside id="modal1" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titlemodal" style="display:none;">
						    <div class="modal-wrapper js-modal-stop">
						      <STYLE>
						.js-modal-close {
						background-color: #A8A2CC;
						border-color: #BCB6E2 #BCB6E2 #A8A2CC #A8A2CC;

						border-top-width: thin;
						border-right-width: thin;
						border-bottom-width: thin;
						border-left-width: thin
						}
						</STYLE>
						        <button class="js-modal-close" >Quitter</button>
						        <meta charset="UTF-8">
						        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
						      <link rel="stylesheet" href="../../Inscri&Connexion/sign-up-login-form/dist/style.css">



						      <!-- partial:index.partial.html -->
						      <div class="form">

						            <ul class="tab-group">
						              <li class="tab active"><a href="#signup">Inscription</a></li>
						              <li class="tab"><a href="#login">Connexion</a></li>
						            </ul>

						            <div class="tab-content">
						              <div id="signup">
						                <h1>Inscription</h1>

						                <form action="../../../Traitement/User/InscriptionT.php" method="post">

						                <div class="top-row">
						                  <div class="field-wrap">
						                    <label>
						                      Login<span class="req">*</span>
						                    </label>
						                    <input type="text" name="login" required autocomplete="off" />
						                  </div>

						                  <div class="field-wrap">
						                    <label>
						                      Nom<span class="req">*</span>
						                    </label>
						                    <input type="text" name="nom" required autocomplete="off"/>
						                  </div>
						                </div>

						                <div class="field-wrap">
						                  <label>
						                    Prénom<span class="req">*</span>
						                  </label>
						                  <input type="text" name="prenom" required autocomplete="off"/>
						                </div>

						                <div class="field-wrap">
						                  <label>
						                    Email<span class="req">*</span>
						                  </label>
						                  <input type="email" name="mail" required autocomplete="off"/>
						                </div>

						                <div class="field-wrap">
						                  <label>
						                    Mot de Passe<span class="req">*</span>
						                  </label>
						                  <input type="password" name="mdp" required autocomplete="off"/>
						                </div>

						                <div class="field-wrap">
						                  <label>
						                    Retaper votre mot de Passe<span class="req">*</span>
						                  </label>
						                  <input type="password" name="mdp2" required autocomplete="off"/>
						                </div>

						                <button type="submit" class="button button-block"/>Souscription</button>

						                </form>

						              </div>

						              <div id="login">
						                <h1>Connexion</h1>

														<form action="../../../Traitement/User/connexionT.php" method="post">

						                  <div class="field-wrap">
						                  <label>
						                    Login<span class="req">*</span>
						                  </label>
						                  <input type="text" id="login" name="login" required autocomplete="off"/>
						                </div>

						                <div class="field-wrap">
						                  <label>
						                    Mot de passe<span class="req">*</span>
						                  </label>
						                  <input type="password" id="mdp" name="mdp" required autocomplete="off"/>
						                </div>

						                <p class="forgot"><a href="#">Mot de passe oublier ?</a></p>

						                <button class="button button-block"/>Connexion</button>

						                </form>

						              </div>

						            </div><!-- tab-content -->

						      </div> <!-- /form -->
						      <!-- partial -->
						        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="../../Inscri&Connexion/sign-up-login-form/dist/script.js"></script>
						    </div>
						</aside>
						<script>
						const focusableSelector="button, a, input, textarea";let modal=null,focusables=[],previouslyFocusedElement=null;const openModal=async function(e){e.preventDefault();const o=e.target.getAttribute("href");modal=o.startsWith("#")?document.querySelector(o):await loadModal(o),focusables=Array.from(modal.querySelectorAll(focusableSelector)),previouslyFocusedElement=document.querySelector(":focus"),modal.style.display=null,focusables[0].focus(),modal.removeAttribute("aria-hidden"),modal.setAttribute("aria-modal","true"),modal.addEventListener("click",closeModal),modal.querySelector(".js-modal-close").addEventListener("click",closeModal),modal.querySelector(".js-modal-stop").addEventListener("click",stopPropagation)},closeModal=function(e){if(null===modal)return;null!==previouslyFocusedElement&&previouslyFocusedElement.focus(),e.preventDefault(),modal.setAttribute("aria-hidden","true"),modal.removeAttribute("aria-modal"),modal.removeEventListener("click",closeModal),modal.querySelector(".js-modal-close").removeEventListener("click",closeModal),modal.querySelector(".js-modal-stop").removeEventListener("click",stopPropagation);const o=function(){modal.style.display="none",modal.removeEventListener("animationend",o),modal=null};modal.addEventListener("animationend",o)},stopPropagation=function(e){e.stopPropagation()},focusInModal=function(e){e.preventDefault();let o=focusables.findIndex(e=>e===modal.querySelector(":focus"));!0===e.shiftKey?o--:o++,o>=focusables.length&&(o=0),o<0&&(o=focusables.length-1),focusables[o].focus()},loadModal=async function(e){const o="#"+e.split("#")[1],t=document.querySelector(o);if(null!==t)return t;const l=await fetch(e).then(e=>e.text()),a=document.createRange().createContextualFragment(l).querySelector(o);if(null===a)throw`L'élément ${o} n'a pas été trouvé dans la page ${e}`;return document.body.append(a),a};document.querySelectorAll(".js-modal").forEach(e=>{e.addEventListener("click",openModal)}),window.addEventListener("keydown",function(e){"Escape"!==e.key&&"Esc"!==e.key||closeModal(e),"Tab"===e.key&&null!==modal&&focusInModal(e)});
						</script>



					</div>
					<!-- Menu -->
				
				</nav>
            </div>
            
            <!-- Menu -->
            <ul class="main-menu primary-menu">
                <li><a  href="home.php">Accueil</a></li>
                <li><a href="films.php">Films</a></li>
                <li><a href="reserver.php">Reserver une place </a></li>
                <li><a href="contact.php">Contact</a></li>
                
             </ul>
        </nav>
    </div>
</div>

 </header>

 <?php

}

?>