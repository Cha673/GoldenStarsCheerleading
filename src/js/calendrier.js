function toggleExpansion(element) {
    const expansion = element.querySelector('.expansion');
    const arrow = element.querySelector('.arrow');

    if (expansion.classList.contains('active')) {
        expansion.classList.remove('active');
        arrow.style.transform = 'scaleY(1)';
    } else {
        expansion.classList.add('active');
        arrow.style.transform = 'scaleY(-1)';
    }
}


document.querySelectorAll('.calendar_content').forEach(function(element) {
    element.addEventListener('click', function() {
        toggleExpansion(element)
    })
})