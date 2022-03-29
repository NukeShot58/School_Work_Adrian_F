const div = document.querySelector('div');
div.addEventListener('mouseover', (e) => {
    e.preventDefault();
    div.textContent = "Works";
})