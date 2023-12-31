import ChampsSaisie from "./ChampsSaisie";
import '../style/Text.css';
import EnvoyerButton from './EnvoyerButton.js'

export default function Contact(){
    return(
        <div style={{alignItems:"center", display:"flex", flexDirection:"column"}}>
            <div className="titreContainer">Contactez-Nous</div>
            <ChampsSaisie Label={"Courriel"} Exemple={"mon.adresse@gmail.com"} Type={"email"} Taille={50}/>
            <div style={{alignItems:"row", display: "flex"}}>
                <ChampsSaisie Label={"Nom"} Exemple={"Votre Nom"} Type={"text"} Taille={25}/>
                <ChampsSaisie Label={"Prénom"} Exemple={"Votre Prénom"} Type={"text"} Taille={25}/>
            </div>
            <ChampsSaisie Label={"Objet"} Exemple={"Objet du contact"} Type={"text"} Taille={100}/>
            <ChampsSaisie Label={"corps du message"} Exemple={""} Type={"text"} Taille={1000}/>
            <EnvoyerButton VisitorMail={"fabien.serre.fs@gamil.com"} Subject={"Test"} QuestionVisitor={"text en exemple\n Fabien"} Activite={1} />
        </div>
    )
}
