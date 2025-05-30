import { useContext } from "react"
import { SzavakContext } from "../context/SzavakContext"
import Sor from "./Sor";

const SorokLista= () => {
    const{sorok} = useContext(SzavakContext);
    return(
        <div>
        {sorok.map((sorok,index) =>(
            <Sor key={index} sor ={sorok}/>
        ))}
        </div>
    )
}

export default SorokLista;