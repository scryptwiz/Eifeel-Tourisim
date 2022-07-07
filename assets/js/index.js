const menuIcon = () => {
    let menu = document.getElementById('menu')
    let close = document.getElementById('close')
    menu.style.display = "none"
    close.style.display = "block"
    let mobileNavCOntent = document.getElementById('mobile_nav_content');
    mobileNavCOntent.style.display = "block"
}

const closeIcon = () => {
    let menu = document.getElementById('menu')
    let close = document.getElementById('close')
    menu.style.display = "block"
    close.style.display = "none"
    let mobileNavCOntent = document.getElementById('mobile_nav_content');
    mobileNavCOntent.style.display = "none"
}