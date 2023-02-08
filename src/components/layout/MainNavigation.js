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
          <img src={ require('./Jobster.png') } />
       
          </li>

          <li>
            <Link to='/'>FIND JOBS</Link>
          </li>
         
          <li>
            <Link to='/ProfilePage'>POST JOBS</Link>
          </li>
          <li>
            <Link to='/JobSearchPage'>NOTIFICATIONS</Link>
          </li>
          <li>
            <Link to='/ContactsPage'>YOUR NETWORK</Link>
          </li>
          <li>
            <Link to='/NotificationsPage'>SUGGESTED</Link>
          </li>
           <li>
            <Link to='/LoginPage'>MY PROFILE</Link>
          </li>

        </ul>
      </nav>
    </header>
  );
}

export default MainNavigation;