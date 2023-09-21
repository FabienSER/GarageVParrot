import { Link } from "react-ui";
import Button from "./Button";
import { Navigate } from "react-router-dom";
import { useState } from "react";

export default function AvisButton ({redir}){
    const [valueRedir, setRedir] = useState(redir);

    const DirComment = () =>{
        setRedir(valueRedir => true)
    }
     
    return( 
        <>
        {valueRedir && (<Navigate to="/avis" replace="true"/>)}
        <Button Label={'Vos avis'} OnClick={DirComment}></Button>
        </>
    );
}
