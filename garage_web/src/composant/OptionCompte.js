import { Tabs } from "react-ui";

//génération d'une page avec onglet

export default function OptionCompte(Identifiant,LvlTask){
    //uniquement les droits des employés simples
    if(LvlTask == 1){
        return(
            <div>
                <Tabs>
                    <Tabs.Tab Label="Info compte"><InfoCompte Identifiant={Identifiant}/></Tabs.Tab>
                </Tabs>
            </div>
        )
    }
    else{
        // droit pour le niveau gestionnaire de commentaire
        if(LvlTask == 4){
            return(
            <div>
                <Tabs>
                    <Tabs.Tab Label="Info compte"><InfoCompte  Identifiant={Identifiant}/></Tabs.Tab>
                    <Tabs.Tab Label="Commentaire en attente"><ComAttente/></Tabs.Tab>
                </Tabs>
            </div>)
        }
        else{
            // droit pour le niveau administrateur
            if(LvlTask == 9){
                return(
                <div>
                    <Tabs>
                        <Tabs.Tab Label="Info compte"><InfoCompte  Identifiant={Identifiant}/></Tabs.Tab>
                        <Tabs.Tab Label="Commentaire en attente"><ComAttente/></Tabs.Tab>
                        <Tabs.Tab Label="Horaire"><ParamHoraire/></Tabs.Tab>
                        <Tabs.Tab Label="Service"><ParamService/></Tabs.Tab>
                    </Tabs>
                </div>)

            }
            else{
                // dans les autres cas on force le retour à la page d'accueil
                return(
                <>
                {(<Navigate to="/home" replace="true"/>)}
                </>)

            }

        }

    }
}

Chercher