const menu = document.getElementById('menu')
const navButton = document.getElementById('nav-button')
const closeNavButton = document.getElementById('nav-close')
const showNav = document.getElementById('show-nav')
const dropNav = document.getElementById('drop-nav')
const showCategories = document.getElementById('show-categories')
const categoryDropdown = document.getElementById('category-dropdown')
const imageInput = document.getElementById('image-input')
const imagePreview = document.getElementById('image-preview')

navButton.addEventListener('click', () => {
    menu.style.display = 'block'
})

closeNavButton.addEventListener('click', () => {
    menu.style.display = 'none'
})

let categoriesOpen = false
showCategories.addEventListener('click', () => {
    if (!categoriesOpen) {
        categoryDropdown.style.opacity = '1'
        showCategories.style.borderBottom = '1px solid #000'
        categoryDropdown.style.visibility = 'visible'
        categoriesOpen = true
    } else {
        categoryDropdown.style.opacity = '0'
        showCategories.style.borderBottom = 'none'
        categoryDropdown.style.visibility = 'hidden'
        categoriesOpen = false
    }
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

imageInput.addEventListener('change', () => {
    const file = imageInput.files[0]
    if (file) {
        const reader = new FileReader()
        reader.addEventListener('load', () => {
            imagePreview.setAttribute('src', reader.result)
        })
        reader.readAsDataURL(file)
    }
})
