
const valider = document.getElementById("valider");
const vider = document.getElementById("vider");
const prenom = document.getElementById("prenom");
const age = document.getElementById("age");
const resultat = document.getElementById("resultat");
const majeurMineur = document.getElementById("majeurMineur");
const retraite = document.getElementById("retraite")

valider.addEventListener("click",function(){
    if (prenom.value !="" && age.value > 0) {
        
        resultat.textContent = "Bonjour " + prenom.value + " votre âge est: "+ age.value+".";
        if (age.value >=18) {
            majeurMineur.textContent = "Vous êtes majeur.";
        }else{
            majeurMineur.textContent = "Vous êtes mineur";
        }
       
    }else{
        resultat.textContent = "Compléter/corriger le formulaire.";
    }
});