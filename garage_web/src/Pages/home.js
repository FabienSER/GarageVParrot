import MenuPrinc from "../composant/MenuPrinc";
import Logo from "../composant/Logo";
import "../style/Home.css";
import Coordonnee from "../composant/Coordonnee.js";
import Horaire from "../composant/Horaire.js";
import ListeService from "../composant/ListeService";
import CarrouselCom from "../composant/QuelquesCom";


export default function Home ({Direction, Connect}){
    return(
        <div className="homeContainer">
            <Logo />
            <MenuPrinc Direction={Direction} Connect={Connect}/>
            <div>
                <Coordonnee />
            </div>
            <div>
                <CarrouselCom />
            </div>
            <div>
                <Horaire />
            </div>
            <div>
                <ListeService />
            </div>
        </div>
    )
}