// const monTitre = document.querySelector('#titre');
const monTitre = document.getElementById('titre');
const monBouton = document.getElementById('validate');
const inputCodePays = document.getElementById('codePays');
const inputNomPays = document.getElementById('nomPays');
const divResult = document.getElementById('result');

const regexNomPays = /[a-zA-Z]{4,}/;
// Modifier le titre
monTitre.textContent = 'Ajouter un pays';

// ajouter un évènement au bouton recherche

// monBouton.onclick = () =>{

// };

monBouton.addEventListener('click', (event) => {
    
    event.preventDefault();
    divResult.textContent = '';
    
    
    let codePays = inputCodePays.value;
    let nomPays = inputNomPays.value;
    

    try{

        if (codePays.lenght != 2) {
            throw new Error('LE code pays doit contenir exactement 2 caractères.');
        }

        if(!regexNomPays.test(nomPays)){
            throw new Error('LE nom du pays doit contenir au moins 4 lettres.');
        }

        // On met le code pays en majuscule
        codePays = codePays.toUpperCase();

        // Récupération de la 1ère lettre du nom du pays
        // let premiereLettre = nomPays.substr(0, 1); incorrecte car déprécié
        // let premiereLettre = nomPays.charAt(0);
        // let premiereLettre = nomPays.slice(0, 1);
        let premiereLettre = nomPays.substring(0, 1).toUpperCase();

        // Récupération du nom du pays sauf la 1ère lettre
        let lettresRestantes = nomPays.slice(1).toLowerCase();

        //Formatage du nom du pays
        nomPays = premiereLettre + lettresRestantes;
        // nomPays = nomPays.charAt(0).toUpperCase() + nomPays.slice(1).toLowerCase();

        let nouveauPays = {
            country_code: codePays,
            country_name: nomPays

        };

    }catch(error) {
        console.log(error);
        divResult.textContent = error;
    }
});

