const menu = document.getElementById('menu')
const navButton = document.getElementById('nav-button')
const closeNavButton = document.getElementById('nav-close')
const showNav = document.getElementById('show-nav')
const dropNav = document.getElementById('drop-nav')
const showCategories = document.getElementById('show-categories')
const categoryDropdown = document.getElementById('category-dropdown')

navButton.addEventListener('click', () => {
    menu.style.display = 'block'
})

closeNavButton.addEventListener('click', () => {
    menu.style.display = 'none'
})

let navOpen = false
showNav.addEventListener('click', () => {
    if (!navOpen) {
        dropNav.style.opacity = '1'
        navOpen = true
    } else {
        dropNav.style.opacity = '0'
        navOpen = false
    }
})

let categoriesOpen = false
showCategories.addEventListener('click', () => {
    console.log('clicked')
    if (!categoriesOpen) {
        categoryDropdown.style.opacity = '1'
        showCategories.style.borderBottom = '1px solid #000'
        categoriesOpen = true
    } else {
        categoryDropdown.style.opacity = '0'
        showCategories.style.borderBottom = 'none'
        categoriesOpen = false
    }
})
