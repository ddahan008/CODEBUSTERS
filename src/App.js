//import {Route} from 'react-router-dom';
import { BrowserRouter as Router, Route, Routes} from 'react-router-dom';

import HomePage from './pages/Home';
import LoginPage from './pages/Login';
import SignupPage from './pages/Signup';
import MYPROFILE from './pages/MYPROFILE';
import JobSearchPage from './pages/JobSearch';

import NOTIFICATION from './pages/NOTIFICATION';
import PostJobs from './pages/PostJobs';
import CONTACTS from './pages/CONTACTS';
import SUGGESTED from './pages/SUGGESTED';
import HEADER from './components/layout/HEADER';
import Footer from './components/layout/Footer';


function App() {
  return (
    <div>
      
      
<HEADER/>
     {
     <Routes>
        <Route path="/" element={<HomePage/>} />
        <Route path="/LoginPage" element={<LoginPage />} />
        <Route path="/SignupPage" element={<SignupPage />} />
        <Route path="/MYPROFILE" element={<MYPROFILE />} />
        <Route path="/JobSearchPage" element={<JobSearchPage />} />

        <Route path="/NOTIFICATION" element={<NOTIFICATION />} />
        <Route path="/PostJobs" element={<PostJobs />} />
        <Route path="/CONTACTS" element={<CONTACTS />} />
        <Route path="/SUGGESTED" element={<SUGGESTED />} />
      </Routes>
      }
    <Footer/>


    </div>
  );
}

export default App;