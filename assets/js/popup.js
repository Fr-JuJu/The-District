// Sélectionner les éléments HTML
const popup = document.getElementById('popup');
const closePopupButton = document.getElementById('close-popup');

// Afficher la pop-up après 3 secondes
setTimeout(() => {
  popup.style.display = 'block';
}, 3000);

// Fermer la pop-up lorsque le bouton est cliqué
closePopupButton.addEventListener('click', () => {
  popup.style.display = 'none';
});