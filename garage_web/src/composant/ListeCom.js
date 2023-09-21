import Commentaire from "./Commentaire";



export default function ListeCommentaire(){

    let TabComment =[["David A.", "Grace à V Parrot, ma voiture parle.", '5'],
                 ["Satanas", "Il sont fou chez eux", 3]];

    let ComPrecedent;
    let NbElement = TabComment.length;
    let [Nom, Comment, Note] = [' ',' ',0];
    
    
    for(let i=0; 0 <NbElement ; i++){
        [Nom, Comment, Note] = TabComment.shift();
        ComPrecedent = SlideComment({ComPrecedent,Nom,Comment,Note});
        NbElement = TabComment.length;
    }

    return(
        <div style={{flexDirection:'row', display:'flex', flexWrap:'wrap'}}>
           {ComPrecedent} 
        
        </div>
    );
}

const SlideComment =({ComPrecedent,Nom, Comment, Note}) => {
    return(
        <div >
            {ComPrecedent}
            <div>
                <Commentaire Nom={Nom} Comment={Comment} Note={Note} />
            </div>
        </div>
    );
}