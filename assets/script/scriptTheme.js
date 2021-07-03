var toggleBtn = document.querySelector('#flexSwitchCheckChecked')
var theme = document.querySelector('#theme-link')
console.log(theme)
console.log(theme.getAttribute('href'))
var headerlogo = document.querySelector('#headerlogo')

var currentTheme = localStorage.getItem('theme')

if(currentTheme == null){
    localStorage.setItem('theme', 'light')
} else if(currentTheme == 'dark') {
    theme.setAttribute('href','./assets/style/style.css')
    headerlogo.setAttribute('src','/assets/img/sosportdark.png')
}
currentTheme = localStorage.getItem('theme')

toggleBtn.addEventListener('click', function(){
    
    if(currentTheme == 'light'){
        localStorage.setItem('theme','dark')
        currentTheme = localStorage.getItem('theme')
    } else {
        localStorage.setItem('theme','light')
        currentTheme = localStorage.getItem('theme')
    }
    console.log(localStorage.getItem('theme'))
    
    if(currentTheme == 'dark'){
        theme.setAttribute('href','./assets/style/style.css')
        headerlogo.setAttribute('src','/assets/img/sosportdark.png')
    } else {
        theme.setAttribute('href','./assets/style/style-light.css')
        headerlogo.setAttribute('src','/assets/img/sosportlight.png')
    }
})
