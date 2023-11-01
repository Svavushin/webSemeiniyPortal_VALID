$(document).ready(function () {
  $(".card-block-svm").slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,

    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },

      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".prev").on("click", function () {
    $(".card-block-svm").slick("slickPrev");
  });

  $(".next").on("click", function () {
    $(".card-block-svm").slick("slickNext");
  });
});

/*----------------------------------------------------*/

$(document).ready(function () {
  $(".card-block-svm-2").slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,

    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },

      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".prev-2").on("click", function () {
    $(".card-block-svm-2").slick("slickPrev");
  });

  $(".next-2").on("click", function () {
    $(".card-block-svm-2").slick("slickNext");
  });
});

/*----------------------------------------------*/

var menuOpen = false;

var menuToggleImg = document.querySelector("#menuToggle img");

function toggleNav() {
  if (menuOpen) {
    closeNav();
    menuOpen = false;
    menuToggleImg.src = "src/vaadin_menu.svg";
  } else {
    openNav();
    menuOpen = true;
    menuToggleImg.src = "src/close-button.svg";
  }
}

function openNav() {
  document.getElementById("main").style.transform = "translateX(300px)";
}

function closeNav() {
  document.getElementById("main").style.transform = "translateX(0px)";
}

document.querySelector("#menuToggle").addEventListener("click", toggleNav);

/*------------------MODAL___WINDOW---------------------*/

var modal = document.getElementById("myModal");
var btn = document.getElementById("openModalButton");
var btn1 = document.getElementById("openModalButton-1");
var span = document.getElementsByClassName("close-modal")[0];

btn.onclick = function () {
  modal.style.display = "block";
};

btn1.onclick = function () {
  modal.style.display = "flex";
};

span.onclick = function () {
  modal.style.display = "none";
};

// window.onclick = function (event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// };

/*----------------------------------------------------*/

document.getElementById("img-btn-prev").onmouseover = function () {
  this.src = "src/left-sl-over.svg";
};
document.getElementById("img-btn-prev").onmouseout = function () {
  this.src = "src/left-sl-blue.svg";
};

document.getElementById("img-btn-next").onmouseover = function () {
  this.src = "src/right-sl-over.svg";
};
document.getElementById("img-btn-next").onmouseout = function () {
  this.src = "src/right-sl-blue.svg";
};

document.getElementById("img-btn-prev-2").onmouseover = function () {
  this.src = "src/left-sl-over.svg";
};
document.getElementById("img-btn-prev-2").onmouseout = function () {
  this.src = "src/left-sl-white.svg";
};

document.getElementById("img-btn-next-2").onmouseover = function () {
  this.src = "src/right-sl-over.svg";
};
document.getElementById("img-btn-next-2").onmouseout = function () {
  this.src = "src/right-sl-white.svg";
};

/*----------------------------------------------------*/

/* Открыть боковое меню */
function openNav1() {
  document.getElementById("mySidenav-tel").style.width = "100%";
}

/* Закрыть боковое меню */
function closeNav1() {
  document.getElementById("mySidenav-tel").style.width = "0";
}
