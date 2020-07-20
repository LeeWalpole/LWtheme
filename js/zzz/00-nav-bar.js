navbar: {
    // navbar scrolling animation
    let body = document.querySelector('body');
    let prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
        let currentScrollPos = window.pageYOffset;
        if (document.documentElement.scrollTop < 30)   {
            body.classList.add('scrolling-unsure');
        }
    else if (prevScrollpos > currentScrollPos)   {
    // Scrolling UP
    body.classList.add('scrolling-up');
    body.classList.remove('scrolling-down'); 
    } else {
    // Scrolling DOWN
    body.classList.add('scrolling-down');
    body.classList.remove('scrolling-up'); 
    main.classList.remove('stop-scrolling');
    }
    prevScrollpos = currentScrollPos;
    }
}






navbar: {
    // navbar scrolling animation
    let body = document.querySelector('body');
    let prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
        let currentScrollPos = window.pageYOffset;
        if (document.documentElement.scrollTop < 30)   {
            body.classList.add('scrolling-unsure');
        }
    else if (prevScrollpos > currentScrollPos)   {
    // Scrolling UP
    body.classList.add('scrolling-up');
    body.classList.remove('scrolling-down'); 
    } else {
    // Scrolling DOWN
    body.classList.add('scrolling-down');
    body.classList.remove('scrolling-up'); 
    main.classList.remove('stop-scrolling');
    }
    prevScrollpos = currentScrollPos;
    }
}