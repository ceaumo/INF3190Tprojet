<?php         
require 'config.php';
require 'head.php';
?>


<table id="tableManifestants" class="display" style="width:80%">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Lieux</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php 
				 $queryTable = $db_connection -> query ("SELECT membres.nom,membres.prenom,lieux.nom,manifestations.date 
                 FROM membres,manifestations,lieux 
                 WHERE membres.id = manifestations.membre AND manifestations.lieux = lieux.id 
                 ORDER BY manifestations.date");
							 
		while ($valeurs = mysqli_fetch_array($queryTable)) {
                echo '<tr><td>'.$valeurs[0].'</td><td>'.$valeurs[1].'</td>
                <td>'.$valeurs[2].'</td><td>'.$valeurs[3].'</td></tr>';
             }                
                mysqli_close($db_connection);
            ?> 
        </tbody>
</table>  
 
        <?php
         require 'tail.php';
		?>
