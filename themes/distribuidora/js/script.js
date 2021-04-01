
const button = document.getElementById('menu');
const navbar = document.getElementById('navbar')

const showMenu = () => {
  button.addEventListener('click',() => navbar.classList.toggle("is-active"))
}

const start = () =>{
  showMenu();
  AOS.init();
}

window.onload = start;

