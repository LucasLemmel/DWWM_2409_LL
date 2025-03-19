export class Pays
{
    static regexNomPays = /[a-zA-Z]{4,}/;
    constructor(codePays, nomPays){

        if(codePays.lenght != 2){
            throw new Error('Le code pays doit contenir exactement 2 caractère');
        };

        if(!Pays.regexNomPays.test(nomPays)){
            throw new Error('Le nom du pays doit contenir au moins 4 lettres');
        }

        this.codePays = codePays.toUpperCase();
        this.nomPays = nomPays.charAt(0).toUpperCase() + nomPays.slice(1);
    }
    
   
}