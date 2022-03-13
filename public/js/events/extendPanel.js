function extendPanel(id) {
    var card = document.getElementById(id);
    if (card.classList.contains('hidden')) {
        card.classList.remove('hidden');
        card.classList.add('inline');
    }
    else {
        card.classList.remove('inline');
        card.classList.add('hidden');
    }
}