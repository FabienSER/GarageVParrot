import { useState, useEffect } from 'react';
import React from 'react';
import Button from './Button.js';
import { useLinkClickHandler } from 'react-router-dom';

function sayHello() {
    alert('You clicked me!');
  }
  
export default function EnvoyerButton ({VisitorMail, Subject, QuestionVisitor, Activite}){ 
    
	const [valueActivite,setvalueActivite] = useState(Activite);
	
    const handleClick = ()=>
    {
        setvalueActivite( prevcount => prevcount + 1);
    };
    //const handleClick = () => {
    //    sendMail({VisitorMail, Subject, QuestionVisitor});
    //};

    return(
        <>
        <Button OnClick={handleClick} ></Button>00{valueActivite}</>
    );
}