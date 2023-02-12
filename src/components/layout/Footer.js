import React from 'react';
import classes from './Footer.css';
const Footer = () =>{

    return (
        <>
            
            <hr></hr>
            <div className="centerLogo">
            <img   className="icon" src={ require('./insta-icon.png') } />
            <img   className="icon" src={ require('./face-icon.png') } />

            </div>

            <div  className="centerLogo">© Jobster, Inc. 2023. Your career in our claws!</div>
        </>


    )

}

export default Footer;