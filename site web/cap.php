<?php

require __DIR__ . '/vendor/autoload.php'; // Chargement de l'autoloader de Composer

use Spatie\Browsershot\Browsershot;

// Définir le chemin de sortie pour l'image capturée
$outputPath = __DIR__ . '/capture.jpg';

// Chemin vers l'exécutable Edge
$edgePath = 'C:\Program Files (x86)\Microsoft\Edge\Application\msedge.exe';

try {
    // Utiliser Browsershot pour prendre une capture d'écran du bureau
    Browsershot::url('http://localhost/site%20web/') // URL de votre application
        ->setChromePath($edgePath) // Chemin de l'exécutable Edge
        ->setWindowSize(1920, 1080) // Définir la taille de la fenêtre
        ->save($outputPath);

    echo 'Capture réussie. L\'image est enregistrée dans ' . $outputPath;
} catch (Exception $e) {
    echo 'Erreur lors de la capture du bureau : ' . $e->getMessage();
}
