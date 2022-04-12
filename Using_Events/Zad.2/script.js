const div = document.querySelector('div');
div.addEventListener('mouseover', (e) => {
    e.preventDefault();
    div.textContent = "Works";
})
div.addEventListener('dblclick', (e) => {
    e.preventDefault();
    div.style.color = 'red';
})