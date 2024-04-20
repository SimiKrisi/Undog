const news_content = document.getElementById("news_content");
class fellepes{
    constructor(date, name, location, prise){
        this.date = date;
        this.name = name;
        this.location = location; 
        this.prise = prise;
    }
}
var suti3 = new fellepes("2024.03.02 19:00","Undög egyéni koncert", "Váci Suti Brothers' Pub", "Ingyenes");
var ani = new fellepes("2024.03.16 15:30","Metál házibuli","Dunakeszi, Ani borozó","700Ft");
const haknik = [suti3, ani];
for (let i = 0; i < haknik.length; i++) {
    let h3_name = document.createElement("h3");
    h3_name.innerHTML = haknik[i].name;
    let p_date = document.createElement("p");
    p_date.innerHTML = haknik[i].date;
    let p_location = document.createElement("p");
    p_location.innerHTML = haknik[i].location;
    let p_prise = document.createElement("p");
    p_prise.innerHTML = haknik[i].prise;
    news_content.appendChild(h3_name);
    news_content.appendChild(p_date);
    news_content.appendChild(p_location);
    news_content.appendChild(p_prise);
}
