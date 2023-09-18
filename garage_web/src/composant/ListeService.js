import "../style/Text.css";
import React from "react";

 
let TestHoraire = [["Titre ","description "],
                     ["Vente ","vente de voiture d'occasion "]];

export default function ListeService(){
    let NbElement = TestHoraire.length;
    let Precedent;
    let [Titre, Description] = [' ',' ',' ',' ' ,' '];

    for(let i=0; 0 <NbElement; i++){
        [Titre, Description] = TestHoraire.shift();
        Precedent = LigneService({Precedent,Titre, Description});
        NbElement = TestHoraire.length;
    }
    return(
        <div className="articleContainer">
           <div className="titreContainer">Liste des services</div> 
           <ul>{Precedent}</ul>
        </div>
    )
}


const LigneService = ({Precedent,Titre, Description}) => {
    //TODO compléter les cas fermé demi journée et journée complète
    
    return (
        <>{Precedent}
        <li>{Titre} : {Description} </li>
        </>
    );
};