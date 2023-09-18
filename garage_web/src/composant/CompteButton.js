import React from 'react';
import { Menu } from 'react-ui';
import '../style/Button.css'

// TODO : compléter la fieulle de style

const MenuButton = ({Color,Background,Hover,Connect}) => {
  // TODO Sinon l'état de connxeion est non défini il faut considérer l'utilisateur comme non connecté

  if (Connect === false){  
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
                    Compte
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
                  }}>Connexion</Menu.Item>
          </Menu.List>
      </Menu>
    );

  }
  else{
    return(
      <Menu>
          <Menu.Button>Compte</Menu.Button>
          <Menu.List>
              <Menu.Item >Profil</Menu.Item>
              <Menu.Item >Déconnexion</Menu.Item>
          </Menu.List>
      </Menu>
    );
  }
}

export default MenuButton;