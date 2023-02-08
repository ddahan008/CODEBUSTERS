import { Link } from 'react-router-dom';
import logos from './jster.png';
import classes from './MainNavigation.module.css';


//<img className={logos.logo} src={logos} alt='logo'/> this doesn work sadage
function MainNavigation() {
  return (
    <header className={classes.header}>
     
      
      <nav>
     
        <ul>
        
          <li>
            <Link to='/'>Home</Link>
          </li>
         
          <li>
            <Link to='/ProfilePage'>Profile</Link>
          </li>
          <li>
            <Link to='/JobSearchPage'>JobSearch</Link>
          </li>
          <li>
            <Link to='/ContactsPage'>Contacts</Link>
          </li>
          <li>
            <Link to='/NotificationsPage'>Notifications</Link>
          </li>
           <li>
            <Link to='/LoginPage'>Login</Link>
          </li>
          <li>
            <Link to='/SignupPage'>Signup</Link>
          </li>
        </ul>
      </nav>
    </header>
  );
}

export default MainNavigation;