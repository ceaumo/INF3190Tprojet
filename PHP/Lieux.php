<?php         
require 'head.php';
?>

<div id="conexionDivPrincipale">
	<div class="form-group">
		  <form action="../PHP/registreTableLieux.php" method="POST">
		  <h2><em>Formulaire Table Lieux</em></h2>  
			  <label for="nom">nom <span><em>(obligatorie)</em></span></label>
			  <input type="text" name="nom" class="form-input" required/>   
			  
			  <label for="commentaire">commentaire <span><em>(obligatorie)</em></span></label>
			  <input type="text" name="commentaire" class="form-input" required/>         
			 <center> 
				<input type="submit" name="submit" value="Envoyer" class="btn btn-primary">
			
			</center>
			</p>
		  </form>
		</div>
	</div>


<?php 
require 'tail.php';
?>