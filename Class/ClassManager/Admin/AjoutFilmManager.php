<?php


class AjoutFilmManager
{

public function AjoutImage($nametrue)
{

$dossier = "../../Image/Affiche";
$nomdufichier = $nametrue;

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['photo']['size'] <= 3145728)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['photo']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                $name = basename($_FILES['photo']['name']);
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['photo']['tmp_name'], "$dossier/$nomdufichier.$extension_upload");
                        echo "L'envoi a bien été effectué !";
                }
                else
                {
                    echo 'extention non-autorisee';
                }
        }
        else
        {
            echo 'image trop grosse';
        }
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_NO_FILE)
{
    echo 'fichier inexistant';
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_PARTIAL)
{
    echo 'fichier uploadé que partiellement';
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_INI_SIZE)
{
    echo 'fichier trop gros';
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_FORM_SIZE)
{
    echo 'fichier trop gros';
}
elseif (!isset($_FILES['photo']))
{
    echo 'pas de variable';
}
else
{
    echo 'probleme a l\'envoi';
}


}

public function AjoutPage($nametrue)
{

    $film = $nametrue;
    $direction = "../../View/Film/Page".$film.".php";
    $page = "'Page".$film.".php'";
    // 1 : on ouvre le fichier
    $monfichier = fopen($direction, 'c+');
    
    // 2 : on fera ici nos opérations sur le fichier...
    $ligne = fgets($monfichier);
    
    fputs($monfichier, 
    
    '
    
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
    $monfichier2 = fopen('../../View/Film/PageFilm.php', 'a+');
    
    // 2 : on fera ici nos opérations sur le fichier...
    $ligne = fgets($monfichier2);
    
    //fseek($monfichier2, 700);
    
    
    fputs($monfichier2, '<input type="image" class="film" id='.$film.' alt="Login" src="../../Image/Affiche/'.$film.'.jpg" onclick="window.location='.$page.';">');
    
    // 3 : quand on a fini de l'utiliser, on ferme le fichier
    
    fclose($monfichier2);


}


}



?>