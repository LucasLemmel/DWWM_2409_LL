
const ajouterclic = document.querySelector(".ajouter")
const resetclic = document.querySelector(".reset")
const compteur = document.querySelector(".compteur")

ajouterclic.addEventListener("click",() => 
    {
        compteur.innerText++
    })
resetclic.addEventListener("click",() => 
    {
        compteur.innerText = 0
    })