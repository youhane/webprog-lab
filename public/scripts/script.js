const menu = document.getElementById('menu')
const navButton = document.getElementById('nav-button')
const closeNavButton = document.getElementById('nav-close')

navButton.addEventListener('click', () => {
    menu.style.display = 'block'
})

closeNavButton.addEventListener('click', () => {
    menu.style.display = 'none'
})
