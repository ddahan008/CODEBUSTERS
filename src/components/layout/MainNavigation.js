import { Link } from 'react-router-dom';

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
            <Link to='/'>HOME</Link>
          </li>
          <li>
            <Link to='/MYPROFILE'>MY PROFILE</Link>
          </li>
          <li>
            <Link to='/JobSearchPage'>JOBSEARCH</Link>
          </li>
          <li>
            <Link to='/Networking'>NETWORKING</Link>
          </li>
          <li>
            <Link to='/ContactsPage'>CONTACTS</Link>
          </li>
           <li>
            <Link to='/LoginPage'>LOGIN</Link>
          </li>
          <li>
            <Link to='/SignupPage'>SIGNUP</Link>
          </li>

        </ul>
      </nav>
    </header>
  );
}

export default MainNavigation;