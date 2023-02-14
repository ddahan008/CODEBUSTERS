import React from 'react';
import './Footer.css';

const Footer = () => {
  return (
    <footer className="centerLogo">
    <img   className="icon" alt="insta" src={ require('./footerImages/insta-icon.png') } />
     <img   className="icon" alt="face" src={ require('./footerImages/face-icon.png') } />
      <p>© Jobster, Inc. 2023. Your career in our claws!</p>
    </footer>
  );
}
export default Footer;