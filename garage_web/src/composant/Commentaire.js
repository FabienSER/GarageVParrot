import '../style/Text.css';
import Eval from './Eval.js';

export default function Commentaire({Comment, Nom, Note}){
    return(
        <div className='articleContainer'>
            <div>{Comment}</div>
            <div>{Nom}</div>
            <Eval Note={Note} />
        </div>
    )
}