<?php

// Adresse IP ou plage IP à scanner
$ip = '10.10.15.221';

// Construire la commande nmap pour le scan de ports
$nmapCommand = "nmap $ip";

// Exécuter la commande et récupérer la sortie
$output = shell_exec($nmapCommand);

// Afficher le résultat
echo "<pre>$output</pre>";

?>
