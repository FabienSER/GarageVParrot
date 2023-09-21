import { useState} from 'react';
import React from 'react';
import Button from './Button.js';
  
export default function EnvoyerButton ({VisitorMail, Subject, QuestionVisitor, Activite}){ 
    
	const [valueActivite,setvalueActivite] = useState(Activite);
	
    const handleClick = ()=>
    {
        setvalueActivite( prevcount => prevcount + 1);
        // à remplacer par l'appel au service du serveur qui peut envoyer un mail propre
    };

    return(
        <>
        <Button Label={'Envoyer'} OnClick={handleClick} ></Button></>
    );
}