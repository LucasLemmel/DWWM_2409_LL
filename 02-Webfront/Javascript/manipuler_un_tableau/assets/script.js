
const people = ['Mike Dev','John Makenzie','Léa Grande'];

console.log(people);

people.push('Ariana Grande');

console.log(people);

people.unshift('Olivia Rodriguez');

console.log(people);

const malist = document.querySelector('#liste');

function remplirListe()
{
    for (let i = 0; i < people.length; i++)
    {
        const myli = document.createElement('li');
        myli.textContent = people[i];
        myli.setAttribute('class','applist');
        malist.appendChild(myli);
    }

}
window.addEventListener('load',
    function()
    {
        remplirListe();
        console.log('page et liste complètement chargées');
    }
    );



const btnAjout = document.querySelector('#btnAjouter');
const txtPrenom = document.querySelector('#txtprenom');
const txtNom = document.querySelector('#txtnom');

btnAjout.addEventListener('click',function()
{
    let element = txtPrenom.value + ' ' + txtNom.value;
    people.push(element);
    let tabLi = document.querySelectorAll('.applist');
    tabLi.forEach((e)=> e.remove());
    remplirListe();
})