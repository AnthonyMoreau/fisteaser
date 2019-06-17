


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
    affichage.innerHTML = jours + ' jours ' + (heures) + ' heures ' + (minutes) + ' minutes ' + (openDatesecondes - SecondesDate) + ' secondes' 

    
}, 1000/1)