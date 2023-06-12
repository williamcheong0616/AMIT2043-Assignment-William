const buttons = document.querySelectorAll(".seat-button");
const result = document.getElementById('result');

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    button.classList.toggle("clicked");
  });
});

let selectedButtons = [];

buttons.forEach(button => {
  button.addEventListener('click', function() {
    if (selectedButtons.includes(this.textContent)) {
      // Button was already selected, so remove it from the array
      selectedButtons.splice(selectedButtons.indexOf(this.textContent), 1);
    } else {
      // Button was not selected, so add it to the array
      selectedButtons.push(this.textContent);
    }
    result.textContent = selectedButtons.join(', ');
  });
});