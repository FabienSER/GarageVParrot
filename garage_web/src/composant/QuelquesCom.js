import Commentaire from "./Commentaire.js";
import Carousel from "react-multi-carousel";
import "react-multi-carousel/lib/styles.css";

const responsive = {
  superLargeDesktop: {
    // the naming can be any, depends on you.
    breakpoint: { max: 4000, min: 3000 },
    items: 5
  },
  desktop: {
    breakpoint: { max: 3000, min: 1024 },
    items: 3
  },
  tablet: {
    breakpoint: { max: 1024, min: 464 },
    items: 2
  },
  mobile: {
    breakpoint: { max: 464, min: 0 },
    items: 1
  }
};

export default function CarrouselCom(){

    let TabComment =[["David A.", "Grace à V Parrot, ma voiture parle.", '5'],
                 ["Satanas", "Il sont fou chez eux", 3]];

    let ComPrecedent;
    let NbElement = TabComment.length;
    let Temp = NbElement;
    let [Nom, Comment, Note] = [' ',' ',0];
    
    // maximun de 10 slides de commentaires dans le carroussel
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
        <div style={{flexDirection:'row', display:'flex', flexWrap:'wrap'}}>
            {ComPrecedent}
            <div>
                <Commentaire Nom={Nom} Comment={Comment} Note={Note} />
            </div>
        </div>
    );
}