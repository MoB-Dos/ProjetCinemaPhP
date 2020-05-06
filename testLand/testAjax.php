<html>
    <head>
        <title>Tutoriel Ajax (XHTML + JavaScript + XML)</title>
        <script type='text/javascript'>
 
            function getXhr(){
                                var xhr = null; 
                if(window.XMLHttpRequest) // Firefox et autres
                   xhr = new XMLHttpRequest(); 
                else if(window.ActiveXObject){ // Internet Explorer 
                   try {
                            xhr = new ActiveXObject("Msxml2.XMLHTTP");
                        } catch (e) {
                            xhr = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                }
                else { // XMLHttpRequest non supporté par le navigateur 
                   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
                   xhr = false; 
                } 
                                return xhr;
            }
 
            /**
            * Méthode qui sera appelée sur le clic du bouton
            */
            function go(){
                var xhr = getXhr();
                // On définit ce qu'on va faire quand on aura la réponse
                xhr.onreadystatechange = function(){
                    // On ne fait quelque chose que si on a tout reçu et que le serveur est OK
                    if(xhr.readyState == 4 && xhr.status == 200){
                        leselect = xhr.responseText;
                        // On se sert de innerHTML pour rajouter les options à la liste
                        document.getElementById('horaire').innerHTML = leselect;
                    }
                }
 
                // Ici on va voir comment faire du post
                xhr.open("POST","ajax.php",true);
                // ne pas oublier ça pour le post
                xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                // ne pas oublier de poster les arguments
                // ici, l'id de l'auteur
                sel = document.getElementById('film');
                idFilm = sel.options[sel.selectedIndex].value;
                xhr.send("idFilm="+idFilm);
            }
        </script>
    </head>
    <body>
        <form>
            <fieldset style="width: 500px">
                <legend>Liste liées</legend>
                <label>Auteurs</label>
                <select name='film' id='film' onchange='go()'>
                    
                <option value='-1'>Aucun</option>
                    <?php
                    try
                    {
                      $bdd= new PDO('mysql:host=localhost;dbname=cinemaphp;charset=utf8','root','');
                      }
                    catch(Exception $e)
                    {
                        die('Erreur:'.$e->getMessage());
                      }            
              
                     $reponse=$bdd->query('SELECT * FROM testfilm ');
                     $donne=$reponse->fetchall();
                  
                   foreach ($donne as $value) 
                   {
                    echo "<option value='".$value["id"]."'>".$value["film"]."</option>";
                    }   
                    ?>
                    
                </select>
                <label>Livres</label>
                <div id='horaire' style='display:inline'>
                <select name='horaire'>
                    <option value='-1'>Choisir un auteur</option>
                </select>
                </div>
            </fieldset>
        </form>
    </body>
</html>