
const button = document.getElementById('menu');
const navbar = document.getElementById('navbar')

const showMenu = () => {
  button.addEventListener('click',() => navbar.classList.toggle("is-active"))
}

const start = () =>{
  showMenu();
}

window.onload = start;

AOS.init();