//import { Link } from 'react-router-dom';
import pic from './homeImages/background.jpg';
import pic2 from './homeImages/diamond.png';
import pic3 from './homeImages/hands.png';
import './Home.css';

function Home() {
  return (
    <section>
    
      <div className = "head-text">
        <img src ={pic} alt="main" className='background'/>
        <div className="text-on-image">
          <p>Professional Networking </p>
          </div>
          </div>

    
      <h1 className='section-1'>Find the right jobs for you</h1> 

      <div class="container">
        <div class="section-2">
          <h4 class="headerTitle">Customize your profile</h4>  
          <p class="someText">Present your skills and experience</p>
          <button class="learnMore">Learn More</button>
          </div>
          <div class="section-3">
            <h4 class="headerTitle">Explore job offers</h4>
            <p class="someText">Look for exciting new opportunities with our specialized search features.</p>
            <button class="learnMore">Learn More</button>
            </div>
            <div class="section-4">
              <h4 class="headerTitle">Network with professionals</h4>
              <p class="someText">Form groups of professionals</p>
              <button class="learnMore">Learn More</button>
              </div>
              <div class="section-5">
                <h4 class="headerTitle">Post Job Offers</h4>
                <p class="someText">Hire the best by advertising your projects</p>
                <button class="learnMore">Learn More</button>
                </div>
        </div>
        <div class="container-2">
          <div class="section-6">
                <img src ={pic2} alt="diamond" className='imageSection6'/>
                </div>
                <div class="section-7">
                <h4 className='headerTitle'>Quality</h4>
                <p className='someText'>Our moderators are cautiously ensuring quality to provide the best service on the platform</p>
                <button class="learnMore">Learn More</button>
                </div>
        </div>
        <div class="container-3">
        <div className='section-8'>
        <h4 className='headerTitle'>Accessibility</h4>
        <p className='someText'>Jobster is available on a wide range of devices including mobile and tablet</p>
        <button class="learnMore">Learn More</button>
        </div>
        <div className='section-9'>
        <img className='imageSection9' src ={pic3} alt="hands"/>
        </div>
        </div>
    
  </section>
  );
}
export default Home;