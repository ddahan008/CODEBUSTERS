//import {Route} from 'react-router-dom';
import { BrowserRouter as Router, Route, Routes} from 'react-router-dom';

import HomePage from './components/Pages/Home';
import LogInPage from './components/Pages/LogIn';
import SignUpPage from './components/Pages/SignUp';
import MyProfile from './components/Pages/MyProfile';
import Mail from './components/Pages/Mail';
import FindJobs from './components/Pages/FindJobs';
import Notifications from './components/Pages/Notifications';
import PostJobs from './components/Pages/PostJobs';
import Contacts from './components/Pages/Contacts';
import Suggested from './components/Pages/Suggested';
import Header from './components/layout/Header';
import Footer from './components/layout/Footer';


function App() {
  return (
  <div>
    <Header/>
    <Routes>
        <Route path="/" element={<HomePage/>} />
        <Route path="/LoginPage" element={<LogInPage/>} />
        <Route path="/SignupPage" element={<SignUpPage/>} />
        <Route path="/MyProfile" element={<MyProfile/>} />
        <Route path="/Mail" element={<Mail/>} />
        <Route path="/FindJobs" element={<FindJobs/>} />
        <Route path="/Notifications" element={<Notifications/>} />
        <Route path="/PostJobs" element={<PostJobs/>} />
        <Route path="/Contacts" element={<Contacts/>} />
        <Route path="/Suggested" element={<Suggested/>} />
      </Routes>
    <Footer/>
    </div>
    );
  }
  export default App;