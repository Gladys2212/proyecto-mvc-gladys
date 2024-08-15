const activeDarkMode = () => {
  const body = document.getElementById("body");
  const title = document.getElementById("title");
  const btn = document.getElementById("btn");

  body.classList.toggle("active");
  title.textContent = "Modo Claro";
  btn.textContent = "desactivar";
};
