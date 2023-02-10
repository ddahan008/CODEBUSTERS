//import { Link } from 'react-router-dom';
import pic from './imgbg.png';
import pic2 from './diamond.png';
import pic3 from './hands.png';
import './Home.css';

function Home() {
  return (
    <section>
    <div className >

    <img src ={pic} alt="main" style={{
              width: 1905,
              height: 909,
              left: 0,
              top: 111,
            }}/>
            
        <div className="center__text">
          <h3>Professionallllllll Networking </h3>
        </div>

        <div className='background2'>

        <h1 className='Headerpage2'>Find the right jobs for you</h1>   
        <h4 className='Header4page2'>Customize your profile</h4>   
        <p className='SomeText'>Present your skills and experience</p>
        <button className='Learnmore1'>LearnMore</button>
        <h6 className='headerExplore'>Explore job offers</h6>
        <p className='SomeText2'>Look for exciting new opportunities with our specialized search features.</p>
        <button className='Learnmore2'>LearnMore</button>
        <h4 className='headerNet'>Network with professionals</h4>
        <p className='SomeText3'>Form groups of professionals</p>
        <button className='Learnmore3'>LearnMore</button>
        <h4 className='headerPost'>PostJobOffers</h4>
        <p className='SomeText4'>Hire the best by advertising your projects</p>
        <button className='Learnmore4'>LearnMore</button>

        </div>

        <div className='Thirddiv'>
        <img src ={pic2} alt="diamond" style={{
           
             width: 750,
             height: 440,
             left: 80,
             top: 80,
            }}/>
          <h4 className='headerQuality'>Quality</h4>  
          <p className='SomeText5'>Our moderators are cautiously ensuring quality to provide the best service on the platform</p>
          <button className='Learnmore3'>LearnMore</button>

        </div>

        <div className='fourthdiv'>
        <h4 className='headerAccess'>Accessibility</h4>
        <p className='SomeText6'>Jobster is available on a wide range of devices including mobile and tablet</p>
        <button className='Learnmore1'>LearnMore</button>

        <img className='fourthimg' src ={pic3} alt="hands"/>



        </div>

        <div>
          <p>hi</p>
        </div>
        

    </div>
  </section>
  );

}

export default Home;