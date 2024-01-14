window.addEventListener("scroll", function () {
  let nav = this.document.querySelector("nav");
  let windowPosition = window.scrollY > 40;

  nav.classList.toggle("scrolling-active", windowPosition);
});
