import React from 'react';
import { Menu } from 'react-ui';
import '../style/Button.css'

// TODO : compléter la fieulle de style

const InfoButton = ({Color,Background,Hover,Connect}) => {
  // TODO Sinon l'état de connxeion est non défini il faut considérer l'utilisateur comme non connecté
  	
  const handleClick = ()=>
  {
      window.open('/horaire', "horairegarage", "popup, width=900, height=500" )
  };

  return(
      <Menu >
          <Menu.Button className="ButtonContainer"
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
                  }}>
                    Information
            </Menu.Button>
          <Menu.List>
              <Menu.Item className="ButtonContainer"
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
                  }} onClick={handleClick}>Horaires</Menu.Item>
          </Menu.List>
      </Menu>
    );

  
}

export default InfoButton;

