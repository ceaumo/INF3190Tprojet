<?php         
require 'head.php';
?>

<div id="conexionDivPrincipale">
<div class="container">
	<div class="form-group">
		  <form action="../PHP/registreTableLieux.php" method="POST">
		  <h2><em>Formulaire Table Lieux</em></h2>  

		  <div class="form-group">
					<label for="nom" class="control-label col-sm-3 col-sm-push-3">Nom</label>
					<div class="col-sm-3 col-sm-push-3">
						<input name="nom" type="text" id="nom" class="form-control"
							 required="required" maxlength="64"	placeholder="Maximum 64 caractères">
					</div>
		  </div>
		  <div class="form-group">
					<label for="commentaire" class="control-label col-sm-3 col-sm-push-3">commentaire</label>
					<div class="col-sm-3 col-sm-push-3">
						<input name="commentaire" type="text" id="commentaire"  class="form-control">
					</div>
		  </div>     
					<input type="submit" name="submit" value="Envoyer" class="btn btn-primary">
		  </form>
		</div>
	</div>
	</div>
<?php 
require 'tail.php';
?>