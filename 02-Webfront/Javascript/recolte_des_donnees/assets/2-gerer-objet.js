// Utiliser un objet littéral existant
const laFrance = {
    "country_code": "FR",
    "country_name": "France"
}

console.log(laFrance);

const main = document.getElementById('principal')

const articleFrance = document.createElement('article')
articleFrance.innerHTML = `Pays 1 : ${laFrance.country_name} (${laFrance.country_code})`

main.appendChild(articleFrance)

fetch('data/belgique.json').then((Response)=>{
    return Response.json();
}).then((data)=>{
    const articleBelgique = document.createElement('article')
    articleBelgique.innerHTML = `Pays 2 : ${data.country_name} (${data.country_code})`

    main.appendChild(articleBelgique)

}).catch((error) => alert('Erreur lors du chargement des données : ' + error));