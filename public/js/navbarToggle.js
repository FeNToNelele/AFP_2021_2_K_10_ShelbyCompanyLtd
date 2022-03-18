function toggleHamburger() {
    var menuState = document.getElementById("mobile-menu");

    if (menuState.classList.contains('hidden')) {
        menuState.classList.remove('hidden');
        menuState.classList.add('inline');
    } else {
        menuState.classList.remove('inline');
        menuState.classList.add('hidden');
    }
}