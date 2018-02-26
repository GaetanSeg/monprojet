
        <p>Nous sommes le <?php echo date('d/m/Y h:m:s');?> <br></p>
		
        <?php

        $adresse="../../CPAS/Celulle Encodage_partage/";
        $dossier=Opendir($adresse);
		echo "$adresse"
        while ($Fichier = readdir($dossier))
        {
             if ($Fichier != "." && $Fichier != "..")//permet d'enlever les points
             {
                  echo '<li><a href='.$adresse.$Fichier.' target="_blank">'.$Fichier.'</a></li><br>';
             }
        }
        closedir($dossier);
		
        ?>
