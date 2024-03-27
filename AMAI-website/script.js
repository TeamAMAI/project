const value = document.querySelector("#valueTime");
const input = document.querySelector("#customRange1");
value.textContent = input.value;
input.addEventListener("input", (event) => {
  value.textContent = event.target.value;
});

