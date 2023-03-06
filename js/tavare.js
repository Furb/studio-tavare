const btn = document.getElementById("menu_icon");

const nav = document.getElementById("mobile_nav");

btn.addEventListener("click", () => {
  btn.classList.toggle("open");
  nav.classList.toggle("block");
  nav.classList.toggle("hidden");
});
