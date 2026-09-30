
document.addEventListener("DOMContentLoaded", function() {
  const menuBtn = document.querySelector(".navbar .fa-bars");
  const menu = document.querySelector(".menu");
  const search = document.querySelector(".search-form");

  menuBtn.addEventListener("click", function() {
    menu.classList.toggle("show");
    search.classList.toggle("show");
  });
});


document.getElementById('menu-toggle').addEventListener('click', function() {
    document.getElementById('menu').classList.toggle('show');
});
