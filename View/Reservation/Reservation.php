<body>
<head>


</head>
<form action="../../Traitement/Reservation/ReservationT.php" method="post">


                <input type="text" class="form-control" id="login" name="login" placeholder="Entrer un Login ptdr"   required /><br></br>


                <input type="text" class="form-control" id="place" name="place" placeholder="Entrer le nombre de Place ptdr " required ><br></br>

                <input type="date" class="form-control" id="$date" name="date" placeholder="Entrer la Date ptdr " required > (date) <br></br>


                <input type="time" class="form-control" id="$heure" name="heure" placeholder="Entrer l'heure ptdr " required > (heure) <br></br>




                  Quelle film voulez-vous visionez dans notre cinéma ?<br/>
                  <input type="radio" name="film" value="Three Kingdoms"/> Three Kingdoms<br />
                  <input type="radio" name="film" value="Joker"/> Joker<br />
                  <input type="radio" name="film" value="The Witcher"/> The Witcher<br />
                  <input type="radio" name="film" value="Bleds Genocide"/>Bleds Génocide<br /><br>

                  Nombre de Reduction : <br/>
                  <input type="number" name="etudiant"/> tarif etudiant<br />
                  <input type="number" name="enfant" /> tarif enfant<br />
                  <input type="number" name="navigo" /> navigo<br />
                  <input type="number" name="normal" /> non :(<br /></br>

            <button type="submit" value="submit" class="primary-btn text-uppercase">Souscrire à un visionage de film qualitatif</button><br></br>
</form>


<input type="submit" value="retour" onclick="window.location='../../ndex.php';" />


</body>
