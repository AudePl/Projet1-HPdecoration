const burger = document.getElementById('burger')
const navbar = document.getElementById('navbar')
burger.addEventListener('click', function(e) {
    navbar.classList.toggle('display-block')
})

