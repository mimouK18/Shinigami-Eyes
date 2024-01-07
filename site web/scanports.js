const { exec } = require('child_process');

// Adresse IP ou plage IP à scanner
const ip = '10.10.15.221';

// Construire la commande nmap pour le scan de ports
const nmapCommand = `nmap ${ip}`;

// Exécuter la commande et récupérer la sortie
exec(nmapCommand, (error, stdout, stderr) => {
    if (error) {
        console.error(`Erreur lors de l'exécution de la commande : ${error}`);
        return;
    }

    // Afficher le résultat
    console.log(`Résultat : \n${stdout}`);
});
