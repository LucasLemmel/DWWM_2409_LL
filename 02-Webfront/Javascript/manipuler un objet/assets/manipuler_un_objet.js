const myEmployee = {
    lastname: "Doe", 
    firstname: "John", 
    birthday: "1981-11-12", 
    salary: 2150
}
const myTable = document.querySelector("#personne");
const myTBody = myTable.createTBody();


myTable.setAttribute("style","background-color: #90EE90; border:2px solid #ffffff");
const myRow = myTBody.insertRow();

const title = ["Nom","Prénom","Date de naissance","Email","Salaire"]

let nom = myRow.insertCell();
nom.textContent = myEmployee.lastname;

let prenom = myRow.insertCell();
prenom.textContent = myEmployee.firstname;

let birthday = myRow.insertCell();
birthday.textContent = myEmployee.birthday;

let email = myEmployee.firstname.toLowerCase() +"."+ myEmployee.lastname.toLowerCase() +"@example.com";

let myEmail = myRow.insertCell();
myEmail.textContent = email;

let mySalary = myRow.insertCell();
mySalary.textContent = myEmployee.salary + "€";


const myThead = myTable.createTHead();
const mytitlerow=myThead.insertRow();

for (const val of title) {
  const myTitleCell = document.createElement("th");
  myTitleCell.textContent= val;
  mytitlerow.appendChild(myTitleCell);
};

