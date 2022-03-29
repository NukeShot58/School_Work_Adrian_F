const btn = document.querySelectorAll('button');

btn[0].addEventListener('click', (e) => {
    e.preventDefault();
    window.alert("You pressed button 1");
});
btn[1].addEventListener('click', (e) => {
    e.preventDefault();
    window.alert("You pressed button 2");
});