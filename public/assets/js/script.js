// Sélectionner les éléments
const toggleBtn = document.querySelector(".toggle-btn");
const bigWrapper = document.querySelector(".big-wrapper");

// Fonction pour basculer entre les thèmes
function toggleTheme() {
  if (bigWrapper.id === "light") {
    bigWrapper.id = "dark"; // Changer l'ID en "dark"
  } else {
    bigWrapper.id = "light"; // Revenir à "light"
  }
}

// Ajouter un gestionnaire d'événement au bouton toggle
toggleBtn.addEventListener("click", toggleTheme);

//mise a jour tout les 5


