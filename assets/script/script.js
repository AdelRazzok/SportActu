const svgs = document.querySelectorAll('[data-svg="sport"]');

svgs.forEach(e => {
    e.classList.add('color-svg-dark');
});


if (currentTheme == 'dark') {
    toggleBtn.setAttribute('checked','')
}