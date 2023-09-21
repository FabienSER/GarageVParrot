import ConnexionButton from '../composant/ConnexionButton.js'
import ChampsSaisie from '../composant/ChampsSaisie.js'
import '../style/Text.css'

export default function PageConnexion(){
    return(
        <div className='articleContainer'>
            <ChampsSaisie Label={"identifant"} Exemple={"mon.adresse@gmail.com"} Type={"email"} Taille={50}/>
            <ChampsSaisie Label={"mot de passe"} Exemple={""} Type={"password"} Taille={50}/>
            <ConnexionButton />
        </div>
    )
}