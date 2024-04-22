const menu = document.querySelectorAll(".menu");
const burguerButton = document.querySelector(".menu__button");

burguerButton.addEventListener("click", () => {
  if (this.innerWidth < 769) {
    menu.forEach((list) => {
      if (list.style.display != "flex") {
        list.style.display = "flex";
        list.style.animation = "showMenu 0.5s linear";
        burguerButton.classList.remove("fa-bars");
        burguerButton.classList.add("fa-x");
      } else {
        list.style.animation = "hideMenu 0.5s linear";
        setTimeout(() => {
          list.style.display = "none";
        }, 490);
        burguerButton.classList.remove("fa-x");
        burguerButton.classList.add("fa-bars");
      }
    });
  }
});


const address = document.querySelectorAll('.location');
const mapas = document.querySelectorAll('.mapa');

mapas[0].style.display = 'block';

address.forEach((element, index) => {
    element.addEventListener('click', () => {
        mapas.forEach(mapa => {
          mapa.style.display = 'none';
        });
        mapas[index].style.display = 'block';
    });
});


