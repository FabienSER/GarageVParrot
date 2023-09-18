import "../style/Text.css";
import React from "react";

 
let TestHoraire = [["Lundi ","08:00 ","10:00 ","16:00 ","22:00 "],
                     ["Mardi ","08:00 ","10:00 ","16:00 ","22:00 "]];

export default function Horaire(){
    let NbElement = TestHoraire.length;
    let Precedent = EnteteHoraire() ;
    let [Jour, DebMatin, FinMatin, DebAprem, FinAprem] = [' ',' ',' ',' ' ,' '];

    for(let i=0; 0 <NbElement; i++){
        [Jour, DebMatin, FinMatin, DebAprem, FinAprem] = TestHoraire.shift();
        Precedent = LigneHoraire({Precedent,Jour, DebMatin, FinMatin, DebAprem, FinAprem});
        NbElement = TestHoraire.length;
    }
    return(
        <div className="articleContainer">
            <div className="titreContainer">Horaire</div>
            {Precedent}
        </div>
    )
}


const LigneHoraire = ({Precedent, Jour, DebMatin, FinMatin, DebAprem, FinAprem}) => {
    //TODO compléter les cas fermé demi journée et journée complète
    
    return (
        <div>{Precedent}
        <div className="ligneContainer">
            <div className="CellJour">{Jour}</div>
            <div className="CellMatin">{DebMatin} : {FinMatin} </div>
            <div className="CellAprem">{DebAprem} : {FinAprem} </div>
        </div>
        </div>
    );
}
    const EnteteHoraire = () => {
        return (
            <div className="ligneContainer">
                <div className="CellJour">Jour</div>
                <div className="CellMatin">Matin </div>
                <div className="CellAprem">Après-midi </div>
            </div>
        );
};