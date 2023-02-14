import './LogIn.css';

function LogIn() {
    return (
        <div>
            <div class="titles">
                <h1 class="welcome_title">Welcome to Jobster</h1>
                <img src={require('./sharedImages/logo.png')} alt="sd" height={ 200} width={200}/>
                <h3 class="welcome_instruction">Don't have an account? <a href="/SignUpPage"> Register Now</a></h3>
            </div>

            <div className='box'>
            <div class="login-box">
                <h2 class="log_header">Log In</h2>
                
                <div className='credentials'>
                <input type="text" class="input_fields" placeholder="Username / Email Address" name="email" autocomplete="off"></input>
                </div>
                <div className='credentials'>
                <input type="text" class="input_fields" placeholder="Password" name="email" autocomplete="off"></input>
                </div>
                <div className='buttons'>
                <button type="submit" name="login" class="button login_button">Log In</button>
                </div>
                <div className='buttons'>
                <button type="submit" name="google_login" class="button google_button">Sign in with Google</button>    
                </div>
            </div>
          </div>
        </div>
    );
  }
  
  export default LogIn;