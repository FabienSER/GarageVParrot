import VenteButton from "./VenteButton";
import MenuButton from "./CompteButton";
import AvisButton from "./AvisButton";
import { Menu } from 'react-ui';
import "../style/MenuPrinc.css";
import InfoButton from './InfoButton.js'

export default function MenuPrinc({Direction, Format, Connect}){
    if (Direction === "Horizontal"){
        return(
            <div className="menuHContainer">
                <AvisButton></AvisButton>
                <VenteButton></VenteButton>
                <InfoButton></InfoButton>
                <MenuButton Connect={Connect}></MenuButton>
            </div>
        );
    }
    else{
        return(
            <Menu>
                <Menu.Button>Menu</Menu.Button>
                <Menu.List>
                    <Menu.Item ><AvisButton/></Menu.Item>
                    <Menu.Item ><VenteButton/></Menu.Item>
                    <Menu.Item ><MenuButton/></Menu.Item>
                </Menu.List>
            </Menu>
        );
    }

}