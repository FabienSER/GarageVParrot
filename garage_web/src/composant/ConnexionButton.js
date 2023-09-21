import Button from "./Button";
import { useState } from "react";

export default function ConnexionButton ({Identifiant, Password, Connect, LvlTask}){
    const [valueConnect, setConnect] = useState(Connect);
    const [valueLvlState, setLvlTask] = useState(LvlTask);


    

    const Connexion = () => {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
            this.response;
            //on génére un cooki le temps de la connexion [TODO]
            //CookieConnexion();
            setConnect(true);
            //setLvlTask à décrire selon la réponse json
            setLvlTask();
            window.close();
            }
            else{
            if (this.readyState == 4 && this.status != 200) {
                setConnect(false);
                //setLvlTask on force dans tout les cas le niveau de droit à visiteur si la connexion a échoué
                setLvlTask(0);
                alert('identification échoué');
                }
            }
        };
        xhttp.open("GET", "http://localhost:3000/app_open_hours_index", true);
        xhttp.send();
    }

    return(
        <>
            <Button Label={'Connexion'} OnClick={Connexion} />
        </>
    )
}
