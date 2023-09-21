//Création de la fonction
// retour d'un fichier au format JSON
export default function UnloadHours() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         return(this.response);
      }
    };
    xhttp.open("GET", "http://localhost:3000/app_open_hours_index", true);
    xhttp.send();
  };