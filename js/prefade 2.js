prefade: {
(function () {
    let elements;
    let windowHeight;
    function init() {
        elements = document.querySelectorAll('.prefade');
        windowHeight = window.innerHeight;
    }
    function checkPosition() {
        for (let i = 0; i < elements.length; i++) {
            let element = elements[i];
            let positionFromTop = elements[i].getBoundingClientRect().top;
            if (positionFromTop - windowHeight <= 0) {
                element.classList.remove('prefade');
                element.classList.add('postfade');
            }
        }
    }
    window.addEventListener('scroll', checkPosition);
    window.addEventListener('resize', init);
    init();
    checkPosition();
})();
}
