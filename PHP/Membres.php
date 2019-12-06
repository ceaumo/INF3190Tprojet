<?php         
require 'head.php';
?>

<div id="conexionDivPrincipale">
		<div class="form-group">
			  <form action="../PHP/registreTableMembres.php" method="POST">
			  <h2><em>Formulaire Table Membres</em></h2>  
				  
				  <label for="prenom">prenom <span><em>(obligatorie)</em></span></label>
				  <input type="text" name="prenom" class="form-input" required/>   
				  <br>
				  <label for="nom">nom <span><em>(obligatorie)</em></span></label>
				  <input type="text" name="nom" class="form-input" required/>   
				  <br>
				  <label for="datenaissance">Datenaissance <span><em>(obligatorie)</em></span></label>
				  <input type="date" name="datenaissance" class="form-input" required/>   
				  <br>
				  <label for="photo">Photo <span><em>(obligatorie)</em></span></label>
				  <input type="file" name="photo" class="form-input" required>    
				  <br>
				  Fontion:<input name="fonction" list="fonctions"class="form-input" required class="form-control" /><br/>
				  <datalist id="fonctions"  >
					<option value="CADRE">CADRE</option>
					<option value="DELEGUE">DELEGUE</option>
					<option value="MEMBRE">MEMBRE</option>
				</datalist>

				 <center> <input type="submit" name="submit" value="Envoyer" class="btn btn-primary"></center>
				</p>
			  </form>
			</div>
		</div>



<?php 
require 'tail.php';
?>