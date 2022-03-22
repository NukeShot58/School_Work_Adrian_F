class Book{
    constructor(id){
    this.id = id;
    }
    contacts = [];
    showContacts(){
        const div = document.querySelector('div');
        for(let i = 0; i < this.contacts.length)
            div.innerHTML += `<p>: ${element.marka} <p/>`;
            div.innerHTML += `<p>Imie: ${element.imie} <p/>`;
            div.innerHTML += `<p>Numer: ${element.numer} <p/>`;
            div.innerHTML += '<hr>'; 
        });
    }
}