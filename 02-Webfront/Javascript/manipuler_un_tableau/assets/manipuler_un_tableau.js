const people = ["Mike Dev", "John Makenzie", "Léa Grande"];

function addCellTitle(txt, row) {
  let myCell = document.createElement("th");
  myCell.setAttribute(
    "style",
    "border: 1px solid #ACCBE1;padding: 10px; font-weight: bold;background-color: #637081"
  );

  myCell.textContent = txt;

  row.appendChild(myCell);
}

function addCell(txt, row) {
  let myCell = row.insertCell();
  myCell.setAttribute(
    "style",
    "border: 1px solid #ACCBE1;padding: 10px;background-color: #637081"
  );
  myCell.innerHTML = txt;
  return myCell;
}

function genererMail(prenom, nom) {
  return `${prenom.toLowerCase()}.${nom.toLowerCase()}@example.com`;
}

function generateTab() {
                const wrapper = document.querySelector("header");

                const monTab = document.createElement("table");
                wrapper.appendChild(monTab);
                monTab.setAttribute("cellspacing", "0");

                monTab.setAttribute("style", "color: #ACCBE1");

                const myHead = monTab.createTHead();

                const rowTitle = myHead.insertRow();

                let tabTitre = ["Nom", "Prénom", "Email", "Supprimer"];

                for (let i = 0; i < tabTitre.length; i++) {
                    addCellTitle(tabTitre[i], rowTitle);
                }

                const myTBody = monTab.createTBody();

                people.forEach((Element, index) => {
                    let prenom = Element.split(" ")[0];
                    let prenomMail = prenom.replace("é", "e");
                    let nom = Element.split(" ")[1];
                    let supprimer = `<a href="#" id="${index}"  > X </a>`;
                    const myRow = myTBody.insertRow();

                    addCell(nom, myRow);

                    addCell(prenom, myRow);

                    addCell(genererMail(prenomMail, nom), myRow);

                    let cellsuppr = addCell(supprimer, myRow);
                    cellsuppr.setAttribute("style","text-align:center;style;border: 1px solid #ACCBE1;padding: 10px;background-color: #637081");});
}



generateTab();


const tabSuppr = document.querySelectorAll("a");
tabSuppr.forEach((a) => {
  a.addEventListener("click", function (e) {
    e.preventDefault();
    // console.log(a.id) ;
    let numLigne = parseInt(a.id);
    //  let numeroLigneTab = numLigne + 1;
    // console.log(numeroLigneTab);
    console.log(numLigne);
    people.splice(numLigne, 1);
     const test= document.querySelector("table");
    test.remove(); 
    generateTab();   
  }); 

});

const ajouter = document.querySelector("#btnAjouter");
ajouter.addEventListener("click",function () {
    let txtnom = document.getElementById("txtnom").value;
    let txtprenom = document.getElementById("txtprenom").value;
    let personne = txtprenom + " " + txtnom;
    people.push(personne);
    const tableau= document.querySelector("table");
    tableau.remove();
    generateTab(); 
    document.getElementById("txtnom").value="";
    document.getElementById("txtprenom").value="";
    document.getElementById("txtprenom").focus();

})






