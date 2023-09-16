//Nom du fichier : Button.js
import React from 'react';
import '../style/Bouton.css'

const Button = ({Label,Color,Background}) => {
  return (
    <button
      type="button"
      className="ButtonContainer"
      style={{color:Color|| '#B6AC97', 
              background:Background||'#906247', 
              borderColor: Color|| '#B6AC97'
            }}
    >
      {Label}
    </button>
  );
}

export default Button;
