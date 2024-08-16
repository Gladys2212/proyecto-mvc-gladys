const activeDarkMode = () => {
  const text = document.getElementById("text");
  const body = document.getElementById("body");
  body.classList.toggle("active");

  text.textContent = text.textContent === "Nocturno" ? "Claro" : "Nocturno";
};
