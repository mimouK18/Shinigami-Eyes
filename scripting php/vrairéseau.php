<?php

$nmapPath = 'C:\Program Files (x86)\Nmap\nmap.exe';

$target = '10.10.15.173';

$command = "{$nmapPath} -Pn -p 1-1000 {$target}";
 
$output = [];
exec($command, $output, $returnCode);

if ($returnCode == 0) {
    echo "Nmap a été exécuté avec succès.\n";
    echo "Résultat de la commande :\n";
    echo implode("\n", $output);
} else {
    echo "Erreur lors de l'exécution de Nmap. Code de retour : {$returnCode}\n";
}

?>
