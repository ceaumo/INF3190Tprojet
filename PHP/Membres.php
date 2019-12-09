<?php         
require 'head.php';
?>

<div id="conexionDivPrincipale">
<div class="container">
		<div class="form-group">
			  <form action="../PHP/registreTableMembres.php" method="POST" enctype="multipart/form-data">
			  <h2><em>Formulaire Table Membres</em></h2>  
				  

				    <div class="form-group">
					<label for="prenom" class="control-label col-sm-3 col-sm-push-3">Prenom</label>
					<div class="col-sm-3 col-sm-push-3">
						<input name="prenom" type="text" id="prenom" class="form-control"
							 required="required" maxlength="25" placeholder="Maximum 25 caractères">
					</div>
					</div>
					
					<div class="form-group">
					<label for="nom" class="control-label col-sm-3 col-sm-push-3">Nom</label>
					<div class="col-sm-3 col-sm-push-3">
						<input name="nom" type="text" id="nom" class="form-control"
							 required="required" maxlength="25" placeholder="Maximum 25 caractères">
					</div>
					</div>

					<div class="form-group">
					<label for="datenaissance" class="control-label col-sm-3 col-sm-push-3"> Date de naissance</label>
					<div class="col-sm-3 col-sm-push-3">
						<input name="datenaissance" type="date" id="datenaissance" class="form-control">
					</div>
					</div>
					
					<div class="form-group">
					<label for="my_file" class="control-label col-sm-3 col-sm-push-3">Photo</label>
					<div class="col-sm-3 col-sm-push-3">
						<input name="my_file" type="file" id="my_file" class="form-control">
					</div>
				    </div>
					

				  Fontion:<input name="fonction" list="fonctions"class="form-input" required class="form-control" /><br/>
				  <datalist id="fonctions"  >
					<option value="CADRE">CADRE</option>
					<option value="DELEGUE">DELEGUE</option>
					<option value="MEMBRE">MEMBRE</option>
				</datalist>

				
				<input type="submit" name="submit" value="Envoyer" class="btn btn-primary">
			  </form>
			</div>
		</div>
		</div>


<?php 
require 'tail.php';
?>