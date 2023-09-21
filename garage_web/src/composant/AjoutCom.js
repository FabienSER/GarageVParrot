import ValiderButton from "./ValiderButton";
import ChampsSaisie from "./ChampsSaisie";
import "../style/Text.css";

function AjouterCommentaire({Nom, Note, Comment}){
    //[TODO] créer la fonction d'insertion dans la base
}

export default function AjoutCom(){
    const SoumettreCom = () =>{
        
        var NomSaisi=document.getElementById("Name");
        var NoteSaisi=document.getElementById("Note");
        var ComSaisi=document.getElementById("Comment");

        if (NomSaisi==''||NoteSaisi==''||ComSaisi==''){
            alert("Veuillez saisir votre, une note et un commentaire.")
        }
        else{
            if(NoteSaisi < 0 || NoteSaisi > 5 ){
                alert("Veuillez mettre une Note entre 0 et 5")
            }
            else
            {
                AjouterCommentaire(NomSaisi,NoteSaisi,ComSaisi);
            }
        }
    }

    return(
        <div className="articleContainer">
            <ChampsSaisie Label={"Nom"} Exemple={"Nom"} Type={"text"} Taille={30} id={"Name"}/>
            <ChampsSaisie Label={"Note"} Exemple={"0..5"} Type={"text"} Taille={1}  id={"Note"}/>
            <ChampsSaisie Label={"Commentaire"} Exemple={""} Type={"text"} Taille={255}  id={"Comment"}/>
            <ValiderButton Onclick={SoumettreCom} />
        </div>
    )
}