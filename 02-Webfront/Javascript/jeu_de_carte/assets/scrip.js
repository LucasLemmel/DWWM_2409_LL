fetch("https://arfp.github.io/tp/web/javascript/03-cardgame/cardgame.json").then((Response)=>{
    return Response.json();
}).then((cartes)=>{
    console.log(cartes);
    
})

