<?php
$film = "Drive";
$direction = "../View/Film/Page".$film.".php";
$page = "'Page".$film.".php'";
// 1 : on ouvre le fichier
$monfichier = fopen($direction, 'c+');

// 2 : on fera ici nos opérations sur le fichier...
$ligne = fgets($monfichier);

fputs($monfichier, 

'<?php

session_start();
require "../../Class/ClassManager/Comment/CommentManager.php";
require "../../Class/SetUp/SetUpComment.php";

$film = "'.$film.'";

$show= new CommentManager();

$act = $show->CommentAff($film);



?>


<form action="../../Traitement/Comment/CommentT.php" method="post"  novalidate="novalidate">

    
     <?php echo $_SESSION["login"];?>
    

    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" required></textarea>

    <input type="number" id="note" name="note" min="1" max="5" required>
    
    <input id="film" name="film" type="hidden" value="'.$film.'">

    <button type="submit" value="submit" class="primary-btn text-uppercase">Send Comment</button>

</form>'

);
fclose($monfichier);

//$monfichier2 = fopen('../View/Film/PageFilm.php', 'a+');
$monfichier2 = fopen('../template/films.php', 'a+');

// 2 : on fera ici nos opérations sur le fichier...
$ligne = fgets($monfichier2);

//fseek($monfichier2, 700);


//fputs($monfichier2, '<input type="image" class="film" id='.$film.' alt="Login" src="../../Image/Affiche/'.$film.'.jpg" onclick="window.location='.$page.';">');

fputs($monfichier2, '<div class="col-lg-4 col-md-6">
<div class="game-item">
    <img src="./img/joker.jpg" alt="#">
    <h5>The Huricane</h5>
    <a href="game-single.html" class="read-more">En savoir plus  <img src="img/icons/double-arrow.png" alt="#"/></a>
</div>
</div>');

// 3 : quand on a fini de l'utiliser, on ferme le fichier

fclose($monfichier2);
?>