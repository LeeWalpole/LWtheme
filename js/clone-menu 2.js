cloneMenu: {
// Get the last <li> element ("Milk") of <ul> with id="myList2"
let cloneMenuElements = document.querySelector('#footer-menu-elements');
let cloneSocialElements = document.querySelector('.footer-socials');
// Copy the <li> element and its child nodes
let clonedMenuElements = cloneMenuElements.cloneNode(true);
let clonedSocialElements = cloneSocialElements.cloneNode(true);
document.querySelector('#nav-menu-cloned').appendChild(clonedMenuElements);
document.querySelector('#nav-menu-cloned').appendChild(clonedSocialElements);
// Append the cloned <li> element to <ul> with id="myList1"
}