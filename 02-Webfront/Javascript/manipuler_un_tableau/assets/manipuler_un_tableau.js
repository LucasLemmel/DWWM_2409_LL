const people = ['Mike Dev', 'John Makenzie', 'Léa Grande'];

const monTab = document.querySelector("table");

monTab.setAttribute("cellspacing","0");

monTab.setAttribute("style","color: #ACCBE1");

const myHead = monTab.createTHead();

const rowTitle = myHead.insertRow();

function addCellTitle(txt,row){


    let myCell = document.createElement("th");
    myCell.setAttribute("style","border: 1px solid #ACCBE1;padding: 10px; font-weight: bold;background-color: #637081");

    myCell.textContent = txt;

    row.appendChild(myCell);
};

function addCell(txt,row){

    let myCell = row.insertCell();
    myCell.setAttribute("style","border: 1px solid #ACCBE1;padding: 10px;background-color: #637081");
    myCell.textContent = txt;
    return myCell;

}

let tabTitre = ["Nom","Prénom","Email"];

for (let i = 0; i < tabTitre.length; i++) {
   
    addCellTitle(tabTitre[i],rowTitle);

    
};

function genererMail(prenom,nom) {
    return `${prenom.toLowerCase()}.${nom.toLowerCase()}@example.com`;
}

const myTBody = monTab.createTBody();

people.forEach(Element=> {

let prenom = Element.split(" ")[0];
let nom = Element.split(" ")[1];

const myRow = myTBody.insertRow();

addCell(nom,myRow);

addCell(prenom,myRow);

addCell(genererMail(prenom,nom),myRow);


});