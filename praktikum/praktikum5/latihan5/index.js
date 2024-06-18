function toggleMode() {
    const body = document.body
    const navbar = document.getElementById('navbar')
    const containers = document.querySelectorAll('.container')
    const toggleBtn = document.getElementById('toggleBtn')
    const modeText = document.getElementById('modeText')

    if(body.classList.contains('dark-mode-body')) {
        body.classList.remove('dark-mode-body')
        navbar.classList.remove('dark-mode-navbar')
        containers.forEach(container => container.classList.remove('dark-mode-container'))
        toggleBtn.classList.remove('dark-mode')
        modeText.textContent = 'Light Mode'
    }else{
        body.classList.add('dark-mode-body')
        navbar.classList.add('dark-mode-navbar')
        containers.forEach(container => container.classList.add('dark-mode-container'))
        toggleBtn.classList.add('dark-mode')
        modeText.textContent = 'Dark Mode'
        }
    }

function showSection(sectionId) {
    const sections = document.querySelectorAll('.container')
    const links = document.querySelectorAll('.navbar a')

    sections.forEach(section => {
        if(section.id === sectionId) {
            section.style.display = 'block'
        }else{
            section.style.display = 'none'
        }
    })

    links.forEach(link => {
        link.classList.remove('active')
            if(link.getAttribute('onclick').includes(sectionId)) {
        link.classList.add('active')
        }
    })
}
