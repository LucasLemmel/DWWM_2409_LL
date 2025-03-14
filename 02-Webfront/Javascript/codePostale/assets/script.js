fetch("https://arfp.github.io/tp/web/javascript/02-zipcodes/zipcodes.json")
    .then((Response) => {
        return Response.json();
    })
    .then((data) => {
        console.log(data);
        genererListe(data);
    })
    .catch((error) => alert("Erreur : " + error));

let myData = [];
function genererListe(_data) {
    myData = _data;

    for (let i = 0; i < _data.length; i++) {
        let myOption = new Option();
        myOption.value = _data[i].codeCommune;
        myOption.textContent = _data[i].nomCommune + " cp:" + _data[i].codePostal;

        document.getElementById("list-cp").appendChild(myOption);
    }
}

const btnValider = document.querySelector("#btn-choix");
btnValider.addEventListener("click", function () {
    let selection = document.getElementById("list-commune").value;
    console.log(selection);
    let maVille = myData.find((item) => item.nomCommune == selection);
    const information = document.querySelector("#info");

    console.log(maVille);

    information.innerHTML = "Code postal: " + maVille.codePostal + "<br>Commune: " + maVille.nomCommune + "<br>Acheminement: " + maVille.libelleAcheminement;
});
