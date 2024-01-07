<?php

// Chemin de la vidéo
$videoPath = 'C:\wamp64\www\site web\video.mp4';

// Dossier de sortie pour les images capturées
$outputFolder = 'C:/wamp64/www/site web/chemin/vers/dossier/de/sortie/';

// Vérifier si le dossier de sortie existe, sinon le créer
if (!file_exists($outputFolder)) {
    mkdir($outputFolder, 0777, true);
}

// Exécuter la commande FFMpeg pour extraire les images
$ffmpegCommand = "ffmpeg -i \"$videoPath\" -r 1/1 \"$outputFolder/frame_%03d.jpg\"";

shell_exec($ffmpegCommand);

echo "Images capturées avec succès.";

?>


