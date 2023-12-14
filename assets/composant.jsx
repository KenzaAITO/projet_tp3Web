import axios from 'axios';
import { useEffect, useState, usecomposant } from 'react';


function Composant() 
{
    const [message, setMessage] = useState([]);

   useEffect(()=> {
    axios.get('http://localhost:8000/message').then(message => setMessage(message));
   });

    return(
        <p>{{ message }}</p>
    );
}

export default Composant