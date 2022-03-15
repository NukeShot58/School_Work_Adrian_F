class Book{
    constructor(id){
    this.id = id;
    }
    contacts = [];
    showContacts(){
        const div = document.querySelector('div');
        this.contacts.forEach(element => {
            div.innerHTML += `<p>: ${element.marka} <p/>`;
            div.innerHTML += `<p>Imie: ${element.imie} <p/>`;
            div.innerHTML += `<p>Numer: ${element.numer} <p/>`;
            div.innerHTML += '<hr>'; 
        });
    }
}