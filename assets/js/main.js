let french = document.querySelector('#french');
let english = document.querySelector('#english');
let title = document.querySelector('h1');
let jour = document.querySelector('.jours h6')
let heure = document.querySelector('.heures h6')
let minute = document.querySelector('.minutes h6')
let seconde = document.querySelector('.secondes h6')

let p = setInterval(function(){
    
    let openDate = new Date("September 01, 2019 00:00:00").getTime();
    let openDateHours = 23;
    let openDateMinutes = 59;
    let openDatesecondes = 59;

    let nowDate = Date.now();
    let HoursDate = new Date(nowDate).getHours();
    let MinutesDate = new Date(nowDate).getMinutes();
    let SecondesDate = new Date(nowDate).getSeconds();

    let jours = Math.round((openDate - nowDate) / (1000 * 60 * 60 * 24));

    let affichage = document.querySelector('.timer p');
    
    let minutes = openDateMinutes - MinutesDate
    if(minutes < 10){
        minutes = '0'+ minutes
    }

    let heures = openDateHours - HoursDate
    if(heures < 10){
        heures = '0'+ heures
    }
    title.innerHTML = 'OPENING COMING SOON';
    jour.innerHTML = jours
    heure.innerHTML = heures
    minute.innerHTML = minutes
    seconde.innerHTML = openDatesecondes - SecondesDate
}, 1000/1)

    