function burger(element) {
    const menu = element.querySelector('.menu_burger');
    const burger1 = element.querySelector('.line');
    const burger2 = element.querySelector('.line2');
    const burger3 = element.querySelector('.line3');

    if (menu.style.display == 'block') {
        menu.style.display = 'none';
        burger1.style.transform = 'rotate(0deg)';
        burger2.style.transform = 'rotate(0deg)';
        burger3.style.display = 'block';
    } else {
        menu.style.display = 'block';
        burger1.style.transform = ' translateY(8px)';
        burger1.style.transform += 'rotate(40deg)';
        burger2.style.transform = 'rotate(-40deg)';
        burger3.style.display = 'none';
    }
}

document.querySelectorAll('.burger_click').forEach(function(element) {
    element.addEventListener('click', function() {
        burger(element)
    });
    
    // Ajouter un écouteur supplémentaire pour empêcher la propagation du clic aux éléments internes
    element.querySelector('.menu_burger').addEventListener('click', function(event) {
        event.stopPropagation();
    });
});