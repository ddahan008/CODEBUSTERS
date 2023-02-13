import { Link } from 'react-router-dom';

import classes from './HEADER.css';
import Nav from 'react-bootstrap/Nav';

//<img className={logos.logo} src={logos} alt='logo'/> this doesn work sadage
function HEADER() {
  return (
<>
<Nav variant="pills" defaultActiveKey="/" className="header">
      
      <Nav.Link href="/"><img src={ require('./Jobster.png') } /></Nav.Link>
      
      <Nav.Item>
        <Nav.Link href="/FINDJOBS"  eventKey="link-0">FIND JOBS</Nav.Link>
      </Nav.Item>
      <Nav.Item>
        <Nav.Link href="/POSTJOBS"  eventKey="link-1">FIND JOBS</Nav.Link>
      </Nav.Item>
      <Nav.Item>
        <Nav.Link href="/NOTIFICATION" eventKey="link-2">NOTIFICATION</Nav.Link>
      </Nav.Item>
      <Nav.Item>
        <Nav.Link href="/CONTACTS" eventKey="link-3">CONTACTS</Nav.Link>
      </Nav.Item>
      <Nav.Item>
        <Nav.Link href="/SUGGESTED" eventKey="link-4">SUGGESTED</Nav.Link>
      </Nav.Item>
      <Nav.Item>
        <Nav.Link href="/MAIL" eventKey="link-5">MAIL</Nav.Link>
      </Nav.Item>
      <Nav.Item>
        <Nav.Link href="/MYPROFILE" eventKey="link-6">MY PROFILE </Nav.Link>
      </Nav.Item>
      <Nav.Item>
        <Nav.Link href="/LoginPage" eventKey="link-7">LOGIN </Nav.Link>
      </Nav.Item>      <Nav.Item>
        <Nav.Link  href="/SignupPage" eventKey="link-8">SIGNUP </Nav.Link>
      </Nav.Item>
    </Nav>
</>
  );
}

export default HEADER;