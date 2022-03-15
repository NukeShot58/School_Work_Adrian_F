class Komis{
    constructor(nazwa){
        this.nazwa = nazwa;
    }
    tabSam = [];
    dodajSamochod(sam){
        this.tabSam.push(sam);
    }
    usunSamochod(index){
        this.tabSam.splice(index,1);
    }
    wyswietlSamochod(){
        const div = document.querySelector('div');
        this.tabSam.forEach(element => {
            div.innerHTML += `<p>Marka: ${element.marka} <p/>`;
            div.innerHTML += `<p>Model: ${element.model} <p/>`;
            div.innerHTML += `<p>Marka: ${element.cena} <p/>`;
            div.innerHTML += '<hr>'; 
        });
    }
}