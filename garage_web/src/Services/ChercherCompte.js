//Création de la fonction
// retour d'un fichier au format JSON
export default function UnloadCompte({Identitfiant}) {
    var xhttp = new XMLHttpRequest();
    Identitfiant = 0;
    xhttp.onreadystatechange = function() {
      var messageRetour;

      if (this.readyState == 4 && this.status == 200) {
        messageRetour = JSON.parse(this.response);
      }
    };
    xhttp.open("GET", "http://localhost:3000/"+{Identitfiant}+"/edit", true);
    xhttp.send();

    return(messageRetour);
  };