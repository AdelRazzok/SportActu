var toggleBtn = document.querySelector('#flexSwitchCheckChecked')
var theme = document.querySelector('#theme-link')
console.log(theme)
console.log(theme.getAttribute('href'))
var headerlogo = document.querySelector('#headerlogo')

var currentTheme = localStorage.getItem('theme')
if (currentTheme == 'dark') {
    theme.setAttribute('href','./assets/style/style.css')
    headerlogo.setAttribute('src','/assets/img/sosportdark.png')
} else {
    theme.setAttribute('href','./assets/style/style-light.css')
}

toggleBtn.addEventListener('click', function(){
        console.log('event')
        console.log(theme)
    if(theme.getAttribute('href') == 'style-light.css'){
        console.log('if')
        console.log(theme.getAttribute('href'))
        console.log(theme)
        theme.setAttribute('href','./assets/style/style-light.css')
        headerlogo.setAttribute('src','/assets/img/sosportlight.png')
        let mytheme = 'light'
        localStorage.setItem('theme', mytheme)
    } else {
        console.log('else')
        console.log(theme.getAttribute('href'))
        console.log(theme)
        theme.setAttribute('href','./assets/style/style.css')
        headerlogo.setAttribute('src','/assets/img/sosportdark.png')
        let mytheme = 'dark'
        localStorage.setItem('theme', mytheme)
    }
})