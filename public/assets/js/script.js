// Select The Elements
var toggle_btn;
var big_wrapper;

function declare() {
  toggle_btn = document.querySelector(".toggle-btn");
  big_wrapper = document.querySelector(".big-wrapper");
}

declare();

let dark = false;

function toggleTheme() {
  // Toggle dark/light mode by changing the class on the big wrapper
  dark = !dark;
  if (dark) {
    big_wrapper.classList.remove("light");
    big_wrapper.classList.add("dark");
  } else {
    big_wrapper.classList.remove("dark");
    big_wrapper.classList.add("light");
  }
}

function events() {
  toggle_btn.addEventListener("click", toggleTheme);
}

// Initialize events
events();
