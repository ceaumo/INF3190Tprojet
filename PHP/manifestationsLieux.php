<?php         
require 'head.php';
require 'config.php';
?>
                    <div id="conexionDivPrincipale">
                    <form action="../PHP/registreTableManifestations.php" method="POST">
                    <div class="form-group">
				    <h2><em>Formulaire Table Manifestations</em></h2>  

				    <p>Choisir un numéro correspondant à l’id du lieu:
						<select name="lieuxManifestation" class="form-control">
                            <option value="0">Choix:</option>
                            <?php 
							 $query = $db_connection -> query ("SELECT id,nom FROM lieux");
							 
							 while ($valeurs = mysqli_fetch_array($query)) {
                                echo '<option value="'.$valeurs[0].'">'.$valeurs[0].' '.$valeurs[1].'</option>';
                              }
							?>
						</select>
                    </p>
                          
                    <p>Choisir un numéro correspondant à l’id du membre:
						<select name="membreParticipant" class="form-control">
                            <option value="0">Choix:</option>
                            <?php 
							 $query2 = $db_connection -> query ("SELECT id,nom,prenom FROM membres");
							 
							 while ($valeurs2 = mysqli_fetch_array($query2)) {
                                echo '<option value="'.$valeurs2[0].'">'.$valeurs2[0].' '.$valeurs2[2].' '.$valeurs2[1].'</option>';
                              }
							  mysqli_close($db_connection);
							?>
						</select>
					</p>

					  <label for="date">date <span><em>(obligatorie)</em></span></label>
					  <input type="date" name="date" class="form-input" required/>   
	
					 <center> <input type="submit" name="submit" value="Envoyer" class="btn btn-primary"></center>
					
				  </form>
				</div>
            </div>
<?php   
require 'tail.php';
?>