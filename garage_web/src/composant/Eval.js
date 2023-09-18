import FullStar from '../etoilepleine.jpeg'
import EmptyStar from'../etoilevide.jpeg'


export default function Eval({Note}){
let Precedent ;

for(let i=0; i <Note; i++){
    Precedent = AjouterEtoilePleine({Precedent});
}

for(let i=5; i > Note; i--){
    Precedent = AjouterEtoileVide({Precedent});
}

return(
<div style={{flexDirection:'row', display:'flex'}}>
    {Precedent}
</div>
)
};

const AjouterEtoilePleine = ({Precedent}) => {
return (
    <>
        {Precedent}
        <img src={FullStar} style={{width:"15px", height:"15px"}} />
    </>
);
};

const AjouterEtoileVide = ({Precedent}) => {
return (
    <>
        {Precedent}
        <img src={EmptyStar} style={{width:"15px", height:"15px"}} />
    </>
);
};