import axios from 'axios';
import { usecomposant } from 'react';


function composant() 
{

   
    const Usecomposant = 
    usecomposant(() =>
    {
        axios.get('localhost/message');
    })

    return ;
}

export default composant