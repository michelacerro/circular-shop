// ----------- MENU ----------
// indicate current page
document.querySelector('a[aria-current="page"]').style.borderBottom = '1px solid #000000';

// open/close menu block out header with click on menu icon
function toggleMenu() {
  let menuDisplay = document.getElementById('menu-block-out-header');

  if (menuDisplay.style.display === 'none') {menuDisplay.style.display = 'block'}
  else {menuDisplay.style.display = 'none'}
}
document.getElementById('menu-icon').addEventListener('click', toggleMenu);
