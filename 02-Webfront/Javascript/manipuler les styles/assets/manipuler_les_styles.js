
const augmenterTaille = document.querySelector(".augmenter");
const diminuerTaille = document.querySelector(".diminuer");
const tailleText = document.querySelector(".taille");
const text = document.querySelector("p");


tailleText.value = 16;
text.setAttribute("style","font-size: 16px");


augmenterTaille.addEventListener("click",function(){
    let taille = Number(tailleText.value);
    if (taille < 48) {
        taille++;
        text.setAttribute("style","font-size:"+ taille +"px");
        tailleText.value = taille;
    }
    else{
        tailleText.value = "16";
        text.setAttribute("style","font-size: 16px");
    }
})


function diminuer(){
    let taille = parseInt(tailleText.value);
    if (taille > 8) {
        taille--;
        text.style.fontSize = taille + "px";
        tailleText.value = taille;
    }
    else{
        tailleText.value = "16";
        text.setAttribute("style","font-size: 16px");
    }
}
diminuerTaille.addEventListener("click",diminuer)


tailleText.addEventListener("blur",function() {
    let taille = Number(tailleText.value);
    if(taille <= 48 && taille >=8){
        text.setAttribute("style","font-size:"+ taille +"px");
        tailleText.value = taille;
    }
    else{
        tailleText.value = "16";
        text.setAttribute("style","font-size: 16px");
    }
})