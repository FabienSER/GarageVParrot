import MenuPrinc from "../composant/MenuPrinc";
import Logo from "../composant/Logo";
import "../style/Home.css";
import AjoutCom from "../composant/AjoutCom";
import ListeCommentaire from "../composant/ListeCom";


export default function PageCommentaire ({Direction, Connect}){
    return(
        <div className="homeContainer">
            <Logo />
            <MenuPrinc Direction={Direction} Connect={Connect}/>
            <div style={{display:'flex', alignItems:'center',flexDirection:'column'}}>
                <AjoutCom />
                <ListeCommentaire />
                
            </div>
        </div>
    )
}