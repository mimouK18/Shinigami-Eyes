<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images et Vidéos</title>
</head>
<body>
    <h1>Images et Vidéos</h1>
    <ul>
        <?php
        // Chemin du dossier contenant les images et vidéos
        $dossierMedia = 'C:/wamp64/www/site web';

        // Récupérer la liste des fichiers dans le dossier
        $fichiers = scandir($dossierMedia);

        // Filtrer les fichiers pour ne conserver que les images et vidéos
        $imagesEtVideos = array_filter($fichiers, function($fichier) {
            $extension = strtolower(pathinfo($fichier, PATHINFO_EXTENSION));
            return in_array($extension, ['png', 'jpg', 'jpeg', 'gif', 'mp4', 'webm', 'mkv']);
        });

        // Afficher les images et vidéos
        foreach ($imagesEtVideos as $fichier) {
            $cheminFichier = $dossierMedia . '/' . $fichier;

            // Vérifier que le fichier est bien un fichier (et non un répertoire)
            if (is_file($cheminFichier)) {
                if (in_array(strtolower(pathinfo($fichier, PATHINFO_EXTENSION)), ['png', 'jpg', 'jpeg', 'gif'])) {
                    // Redimensionner l'image à une largeur de 200 pixels (ajuster selon vos besoins)
                    echo '<img src="' . htmlspecialchars($fichier) . '" alt="' . $fichier . '" width="200" height="auto">';
                } elseif (in_array(strtolower(pathinfo($fichier, PATHINFO_EXTENSION)), ['mp4', 'webm', 'mkv'])) {
                    echo '<video width="320" height="240" controls>';
                    echo '<source src="' . htmlspecialchars($fichier) . '" type="video/mp4">';
                    echo 'Your browser does not support the video tag.';
                    echo '</video>';
                }
            }
        }
        ?>
    </ul>
</body>
</html>
