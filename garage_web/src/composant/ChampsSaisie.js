import '../style/ChampsSaisie.css';

export default function ChampsSaisie({Label, Exemple, Type,Taille}){
    if (Taille<=50){
    return(
            <div className='champsContainer'>
                <div className='labelContainer'>{Label}</div>
                <input name={Label} id={Label} type={Type} placeholder={Exemple} 
                       required minlength="1" maxlength={Taille} 
                       className='zoneContainer zoneSmallContainer'/>
            </div>
        );
    }
    else{
        if(Taille<=100){
            return(
                <div className='champsContainer'>
                    <div className='labelContainer'>{Label}</div>
                    <input name={Label} id={Label} type={Type} placeholder={Exemple} 
                           required minlength="1" maxlength={Taille} 
                           className='zoneContainer zoneMediumContainer'/>
                </div>
            );

        }
        else{
            return(
                <div className='champsContainer'>
                    <div className='labelContainer'>{Label}</div>
                    <input name={Label} id={Label} type={Type} placeholder={Exemple} 
                           required minlength="1" maxlength={Taille} 
                           className='zoneContainer zoneLargeContainer'/>
                </div>
            );

        }
    }
}