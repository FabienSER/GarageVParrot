import MenuPrinc from "../composant/MenuPrinc";
import Logo from "../composant/Logo";

export default function Home ({Direction, Connect}){
    if (Connect==true){
        return(
            <div className="homeContainer">
                <Logo />
                <MenuPrinc Direction={Direction} Connect={Connect}/>
                <div>
                    <div>
                        <OptionCompte/>
                    </div>
                </div>
            </div>
        )
    }
    else{
        return( 
        <>
            {(<Navigate to="/" replace="true"/>)}
        </>
        )
    }
}