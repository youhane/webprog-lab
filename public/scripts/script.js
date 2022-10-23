var MenuItems = document.getElementById("MenuItems");
MenuItems.style.maxHeight = "0px";

function menutoggle() {
    if (MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "200px";
    } else {
        MenuItems.style.maxHeight = "0px";
    }
}

const title = document.getElementById('title');
const slug = document.getElementById('slug');

title.addEventListener('change', function() {
    fetch('/dashboard/posts/createSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
})

function previewImage() {
    const image = document.getElementById('image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}
