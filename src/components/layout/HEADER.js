import'./Header.css';
import Nav from 'react-bootstrap/Nav';

function Header() {
  return (
  <Nav variant="pills" defaultActiveKey="/" className="header">
    <Nav.Link href="/" className='logo-format' > <img src={require('./headerImages/Jobster.png')} className='logo-format'/> </Nav.Link>
      <Nav.Item>
        <Nav.Link href="/FindJobs" eventKey="link-0" className="custom-link">FIND JOBS</Nav.Link>
      </Nav.Item>
      <Nav.Item>
        <Nav.Link href="/PostJobs"  eventKey="link-1" className="custom-link">POST JOBS</Nav.Link>
      </Nav.Item>
      <Nav.Item>
        <Nav.Link href="/Notifications" eventKey="link-2" className="custom-link">NOTIFICATIONS</Nav.Link>
      </Nav.Item>
      <Nav.Item>
        <Nav.Link href="/Contacts" eventKey="link-3" className="custom-link">CONTACTS</Nav.Link>
      </Nav.Item>
      <Nav.Item>
        <Nav.Link href="/Suggested" eventKey="link-4" className="custom-link">SUGGESTED</Nav.Link>
      </Nav.Item>
      <Nav.Item>
        <Nav.Link href="/Mail" eventKey="link-5" className="custom-link">MAIL</Nav.Link>
      </Nav.Item>
      <Nav.Item>
        <Nav.Link href="/MyProfile" eventKey="link-6" className="custom-link">MY PROFILE</Nav.Link>
      </Nav.Item>
      <Nav.Item>
        <Nav.Link href="/LoginPage" eventKey="link-7" className="custom-link">LOG IN</Nav.Link>
      </Nav.Item>      
      <Nav.Item>
        <Nav.Link  href="/SignupPage" eventKey="link-8" className="custom-link">SIGN UP</Nav.Link>
      </Nav.Item>
      </Nav>
      );
    }
    export default Header;