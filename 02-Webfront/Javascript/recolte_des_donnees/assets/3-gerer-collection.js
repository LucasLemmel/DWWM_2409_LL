fetch('data/collectionPays.json').then((Response) => {

    return Response.json()

}).then((data) => {

    const tbody = document.getElementById('mesPays')

    tbody.innerHTML = data.map(pays => {

        return `<tr><td>${pays.country_code}</td><td>${pays.country_name}</td></tr>`

    }).join('')


}).catch((error) => alert('Erreur lors du chargement des données : ' + error))