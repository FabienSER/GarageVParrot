import React from 'react';
import '../style/Button.css'

const Button = ({Label,Color,Background}) => {
  return (
    <button
      type="button"
      className="ButtonContainer"
      style={{color:Color|| '#D94350', 
              background:Background||'#F2F2F2', 
              borderColor: Color|| '#D94350'
            }}
    >
      {Label}
    </button>
  );
}

export default Button;