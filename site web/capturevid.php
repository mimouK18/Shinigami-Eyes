<?php

// Chemin de la vidéo d'entrée
$inputVideoPath = 'chemin/vers/votre/video.mp4';

// Chemin de la vidéo de sortie (capturée)
$outputVideoPath = 'chemin/vers/dossier/de/sortie/capture.mp4';

// Début de la partie à capturer (en secondes)
$startTimestamp = 30;

// Durée de la partie à capturer (en secondes)
$duration = 10;

// Commande FFmpeg pour capturer la partie spécifique
$ffmpegCommand = "ffmpeg -i \"$inputVideoPath\" -ss $startTimestamp -t $duration -c copy \"$outputVideoPath\"";

// Exécution de la commande FFmpeg
shell_exec($ffmpegCommand);

echo "Vidéo capturée avec succès.";

?>
