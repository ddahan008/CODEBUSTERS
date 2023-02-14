//import {Route} from 'react-router-dom';
import { BrowserRouter as Router, Route, Routes} from 'react-router-dom';

import HomePage from './Components/Pages/Home';
import LogInPage from './Components/Pages/LogIn';
import SignUpPage from './Components/Pages/SignUp';
import MyProfile from './Components/Pages/MyProfile';
import Mail from './Components/Pages/Mail';
import FindJobs from './Components/Pages/FindJobs';
import Notifications from './Components/Pages/Notifications';
import PostJobs from './Components/Pages/PostJobs';
import Contacts from './Components/Pages/Contacts';
import Suggested from './Components/Pages/Suggested';
import Header from './Components/Layout/Header';
import Footer from './Components/Layout/Footer';


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