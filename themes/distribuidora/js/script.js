const button = document.getElementById('menu');
const navbar = document.getElementById('navbar');

const menu = () => {
  button.addEventListener('click',() => toggleMenu());
}

const toggleMenu = () => {
  if(window.innerWidth <= 800){
    navbar.style.display == "block" ? navbar.style.display = "none" : navbar.style.display = "block";
  }else{
    navbar.style.display = flex;
  }
}

const start = () => {
  menu();
}

window.onload = start()

AOS.init();