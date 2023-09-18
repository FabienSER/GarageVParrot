import Contact from "./Contact";
import "../style/Text.css";
import Telephone from "../th.jpeg"
import Courriel from "../courriel.jpeg";
import Adresse from "../maison.jpeg";

export default function Coordonnee(){
    return(
        <div className="articleContainer">
            <div className="titreContainer">Coordonées</div>
            <div style={{width:"auto"}}>
                <div className="ligneContainer">
                    <div><img src={Telephone} alt="téléphone" style={{width:"1.3em", height:"1.3em", marginRight:"10px"}} npm/></div>
                    <div><b>téléphone : </b> 06.42.XX.AJ.24</div>
                </div>
                <div className="ligneContainer">
                    <img src={Courriel} alt="Courriel" style={{width:"1.3em", height:"1.3em", marginRight:"10px"}} npm/>
                    <b>Courriel  : </b> garage.v.parrot@gmail.com
                </div>
                <div className="ligneRightContainer">
                    <img src={Adresse} alt="adresse" style={{width:"1.3em", height:"1.3em", marginRight:"10px"}} npm/>
                    <b>adresse :</b> 12 rue clef anglaise<br/>
                            31000, Toulouse
                </div>
            </div>
            <Contact />
        </div>
    )
}