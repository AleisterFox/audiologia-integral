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

const headerBar = document.querySelector("header");
const mainHero = document.querySelector("section:first-child");

// window.addEventListener("scroll", function () {
//   if (window.scrollY === 0 && headerBar.offsetTop === mainHero.offsetTop) {
//     headerBar.style.backgroundColor = "transparent";
//   } else {
//     headerBar.style.backgroundColor = "rgba(0, 0, 0, 1)";
//   }
// });

const downloadCvs = document.querySelectorAll(".download");

downloadCvs.forEach((downloadCv) => {
  downloadCv.addEventListener("click", () => {
    const fileUrl = "./cv.pdf";
    const fileName = "cv.pdf";

    fetch(fileUrl)
      .then((response) => response.blob())
      .then((blob) => {
        // Create a temporary anchor element
        const a = document.createElement("a");
        a.href = URL.createObjectURL(blob);
        a.download = fileName;

        // Programmatically trigger the download
        a.click();

        // Clean up
        URL.revokeObjectURL(a.href);
        a.remove();
      });
  });
});
