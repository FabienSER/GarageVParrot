/*style et taille fonction de la taille de fenêtre */
import GarageLogo from '../Logosmall.gif';
import '../style/Header.css';

export default function Header(){
    return(
		<header>
			<img src={GarageLogo} alt='logo Garage V.Parrot'npm/>
		</header>
        
    )
};