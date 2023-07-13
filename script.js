// pour le modal
function openModal() {
    document.getElementById("myModal").style.display = "block";
  }
  
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }
  
  // Capturez l'événement de soumission du formulaire
  document.getElementById("addForm").addEventListener("submit", function(e) {
    e.preventDefault(); // Empêche le rechargement de la page
  
    // Récupérez les valeurs des champs du formulaire
    var nom = document.getElementsByName("nom")[0].value;
    var prenom = document.getElementsByName("prenom")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var telephone = document.getElementsByName("telephone")[0].value;
  
    // Effectuez une requête AJAX pour ajouter le client à la base de données
    // Vous devrez écrire le code pour envoyer les données au backend et les insérer dans la base de données
  
    // Fermez le modal après avoir ajouté le client
    closeModal();
  });
  