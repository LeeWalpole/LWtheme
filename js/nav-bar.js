navBar: {
    let oldValue = 0;
    window.addEventListener('scroll', function (e) {
        // Get the new Value
        newValue = window.pageYOffset;
        //Subtract the two and conclude
        if (oldValue - newValue < 0) {
            // document.getElementById('body').style.background = "red";
            document.getElementById('body').classList.add('scrolling-down');
            document.getElementById('body').classList.remove('scrolling-up');
            document.getElementById('body').classList.remove('prescroll');
        } else if (oldValue - newValue > 0) {
            // document.getElementById('body').style.background = "blue";
            document.getElementById('body').classList.add('scrolling-up');
            document.getElementById('body').classList.remove('scrolling-down');
            document.getElementById('body').classList.remove('prescroll');
        }
        // Update the old value
        oldValue = newValue;
    });
}