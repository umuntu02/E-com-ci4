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

//mise a jour tout les 5 secondes

        // Fonction pour rafraîchir le body
        async function refreshBody() {
          try {
              const response = await fetch(window.location.href, { cache: "no-store" }); // Charge la page actuelle
              if (!response.ok) {
                  throw new Error("Erreur lors du chargement de la page");
              }
              const text = await response.text();
              const newBody = text.match(/<body[^>]*>([\s\S]*)<\/body>/i)[1]; // Extrait le contenu du body
              document.body.innerHTML = newBody; // Remplace le contenu du body
          } catch (error) {
              console.error("Erreur:", error);
          }
      }

      // Rafraîchir toutes les 5 secondes
      setInterval(refreshBody, 5000); 
