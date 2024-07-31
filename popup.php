<div id="popup" style="display: none;">
<img src="./assets/img/cookies.png" width="100px" height="100px">
  <p class="fs-2 fw-semibold">Ce site web utilise des Cookies</p>
  <p>Les cookies nous permettent de personnaliser le contenu et les annonces, d'offrir des fonctionnalités relative aux médias sociaux et d'analyser notre trafic. Nous partageons également des informations sur l'utilisation de notre site  avec nos partenaires de média sociaux, de publicité et d'analyse, qui peuvent combiner celles-ci avec d'autres informations que vous leur avez fournies ou qu'ils ont collectées lors de votre utilisation de leurs services.</p>
  <button id="close-popup" class="btn btn-dark  col-3 mt-5 p-2 rounded-pill">Refuser</button>
  <button id="close-popup" class="btn btn-dark  col-3 mt-5 p-2 rounded-pill">Autoriser tous les cookies</button>

</div>

                                        <!-- Style de la pop up !-->
<style>
#popup {
position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
background-color: #76000F;
padding: 20px;
border: 1px solid #000000;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
z-index: 9999;
color:#BCA693;
border-radius: 20px;
filter: drop-shadow(5px 10px 4px rgba(66, 66, 66, 0.2));
}
#close-popup {
margin-top: 10px;
background-color: #000000;
color: #BCA693;
border: none;
padding: 10px 20px;
font-size: 16px;
cursor: pointer;
}
</style>

                                         <!-- Script JS De la pop up ! -->
<script>
    // Sélectionner les éléments HTML
const popup = document.getElementById('popup');
const closePopupButton = document.getElementById('close-popup');

// Afficher la pop-up après 3 secondes
setTimeout(() => {
  popup.style.display = 'block';
}, 1000);

// Fermer la pop-up lorsque le bouton est cliqué
closePopupButton.addEventListener('click', () => {
  popup.style.display = 'none';
});
</script>