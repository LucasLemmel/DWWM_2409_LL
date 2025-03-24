
const nomVoiture = document.getElementById('carName');
const btnRechercher = document.getElementById('btn-rechercher');
const infoVoiture = document.getElementById('result');

let myData = [];


fetch('https://raw.githubusercontent.com/ARFP/DWWM_2409/refs/heads/develop/02%20-%20webfront/JS/exo-js-cars/data/cars.json')
.then((Response)=>{
    return Response.json();
}).then((data)=>{
    console.log(data);
    myData = data;
}).catch((error) => alert("Erreur : " + error));



btnRechercher.addEventListener("click",function(event){
    event.preventDefault();
    console.log("ok");
    for (let i = 0; i < myData.length; i++) {
       
       let maVoiture = myData[i]
       
        if (maVoiture.car_name.includes(nomVoiture.value)) {
            console.log(maVoiture);
            infoVoiture.innerHTML = "Id : " + maVoiture.car_id +
            "<br>Nom : " + maVoiture.car_name + 
            "<br>Année : " + maVoiture.car_model + 
            "<br>Origine : " + maVoiture.car_origin;

       } 
        
    }
})

