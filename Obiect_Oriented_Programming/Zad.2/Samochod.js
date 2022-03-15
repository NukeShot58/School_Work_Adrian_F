class Samochod{
    constructor(marka,model,cena,rocznik,spalenie){
        this.marka = marka;
        this.model = model;
        this.cena = cena;
        this.rocznik = rocznik;
        this.spalenie = spalenie;
    }
    wiek(){
        const data = new Date();
        const rok = data.getFullYear();
        return 'Wiek samochodu wynosi: ' + (rok - this.rocznik);
    }
    koszt(cenaPal){
        return "Koszt przejechania 100km w tym samochodzie wynosi: " + (cenaPal * this.spalenie);
    }
}