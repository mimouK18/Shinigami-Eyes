const { exec } = require('child_process');

// URL du flux vidéo
const videoUrl = 'http://10.10.15.221:8085/?action=stream';

// Nom du fichier de sortie local
const outputFile = '/mnt/c/Users/banoc/Desktop/gabin/capture.mp4';

// Framerate souhaité (par exemple, 30 images par seconde)
const framerate = 2500;

// Construire la commande ffmpeg avec l'option -r pour spécifier le framerate
const ffmpegCommand = `ffmpeg -i "${videoUrl}" -r ${framerate} -c copy "${outputFile}"`;

// Exécuter la commande
exec(ffmpegCommand, (error, stdout, stderr) => {
    if (error) {
        console.error(`Erreur lors de l'exécution de la commande : ${error}`);
        return;
    }
    console.log(`Résultat : ${stdout}`);
});
