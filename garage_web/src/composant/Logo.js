/*style et taille fonction de la taille de fenêtre */
import '../style/Logo.css';
import LogoGarage from '../Logosmall.gif';

export default function Logo(){
    return(
        <div className='logoContainer'>
            <img src={LogoGarage} alt='Logo du garage V Parrot' npm style={{width:"100%",minWidth:"200px",maxWidth:"750px", height:"25vh",minHeight:"65px",maxHeight:"250px"}}/>
        </div>
    )
}