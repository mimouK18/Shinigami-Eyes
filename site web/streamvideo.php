<?php

// URL du flux vidéo  http://10.10.15.221:8085/?action=stream
$videoUrl = 'C:\wamp64\www\site web\video.mp4';

// Nom du fichier de sortie local
$outputFile = 'C:\wamp64\www\site web\capture.mp4';

// Framerate souhaité (par exemple, 30 images par seconde)
$framerate = 2500;

// Construire la commande ffmpeg avec l'option -r pour spécifier le framerate
$ffmpegCommand = "ffmpeg -i \"$videoUrl\" -r $framerate -c copy \"$outputFile\"";

// Exécuter la commande
$output = shell_exec($ffmpegCommand);

// Afficher le résultat
echo $outputFile;

?>
