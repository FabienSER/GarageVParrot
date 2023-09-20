import React from 'react';
import '../style/Button.css';

const Button = ({Label,Color,Background,Hover, OnClick}) => {
  return (
    <button
      type="button"
      className="ButtonContainer"
      style={{color:Color|| '#D94350', 
              background:Background||'#F2F2F2', 
              borderColor: Color|| '#D94350',
              ':hover':{
              color:Background|| '#F2F2F2', 
              background:Hover||'#262526'
              },
              ':active':{
              color:Background|| '#D94350', 
              background:Color||'#F2F2F2', 
              borderColor: Color|| '#D94350',
              }
            }}
      onClick={OnClick}
    >
      {Label}
    </button>
  );
}

export default Button;