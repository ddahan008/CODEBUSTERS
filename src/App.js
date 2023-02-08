//import {Route} from 'react-router-dom';
import { BrowserRouter as Router, Route, Routes} from 'react-router-dom';

import HomePage from './pages/Home';
import LoginPage from './pages/Login';
import SignupPage from './pages/Signup';
import ProfilePage from './pages/Profile';
import JobSearchPage from './pages/JobSearch';
import ContactsPage from './pages/Contacts';
import NotificationsPage from './pages/Notifications';
import PostJobs from './pages/PostJobs';
import Networking from './pages/Networking';
import Suggested from './pages/Suggested';
import MainNavigation from './components/layout/MainNavigation';

function App() {
  return (
    <div>
      
      <MainNavigation/>
     <Routes>
        <Route path="/" element={<HomePage/>} />
        <Route path="/LoginPage" element={<LoginPage />} />
        <Route path="/SignupPage" element={<SignupPage />} />
        <Route path="/ProfilePage" element={<ProfilePage />} />
        <Route path="/JobSearchPage" element={<JobSearchPage />} />
        <Route path="/ContactsPage" element={<ContactsPage />} />
        <Route path="/NotificationsPage" element={<NotificationsPage />} />
        <Route path="/PostJobs" element={<PostJobs />} />
        <Route path="/Networking" element={<Networking />} />
        <Route path="/Suggested" element={<Suggested />} />
      </Routes>
      
      
    </div>
  );
}

export default App;