const myEmployee = {
    lastname: "Doe", 
    firstname: "John", 
    birthday: "1981-11-12", 
    email:"",
    salary: 2150
}
const myTable = document.querySelector("#personne");
const myTBody = myTable.createTBody();


myTable.setAttribute("style","background-color: #90EE90; border:2px solid #ffffff");
myTable.cellSpacing = "0";
const myRow = myTBody.insertRow();

for (const key in myEmployee) {
 
  if(key == "lastname"){ let nom = myRow.insertCell();
    nom.textContent = myEmployee[key];
  }
 
} let prenom = myRow.insertCell();
prenom.textContent = myEmployee.firstname;

let birthday = myRow.insertCell();
birthday.textContent = myEmployee.birthday;

let email = myEmployee.firstname +"."+ myEmployee.lastname +"@example.com";

let myEmail = myRow.insertCell();
myEmail.textContent = email;

let mySalary = myRow.insertCell();
mySalary.textContent = myEmployee.salary + "€";


const myThead = myTable.createTHead();
const mytitlerow=myThead.insertRow();

for (const key in myEmployee) {
  
const myTitleCell = document.createElement("th");
myTitleCell.textContent= key;
mytitlerow.appendChild(myTitleCell);

}