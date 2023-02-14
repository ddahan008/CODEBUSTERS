import './LogIn.css';

function Signup() {
    return (
        <div>
            <div class="titles">
                <h1 class="welcome_title">Ready to Sign Up?</h1>
                <img src={require('./sharedImages/logo.png')} alt="sd" height={ 200} width={200}/>
                <h3 class="welcome_instruction">Have an account? <a href="/LogInPage"> Log In</a></h3>
            </div>

            <div className='box'>
            <div class="login-box">
                <h2 class="log_header">Sign Up</h2>

                <div class="credentials">
                    <div className ='input_format'>
                    <input type="text" class="input_fields" placeholder="First Name" name="name" autocomplete="off"></input>
                    </div>
                    <input type="text" class="input_fields" placeholder="Last Name" name="email" autocomplete="off"></input>
                </div>
                <div class="credentials">
                    <div className ='input_format'>
                    <input type="text" class="input_fields" placeholder="Email Address" name="email" autocomplete="off"></input>
                    </div>
                    <input type="text" class="input_fields" placeholder="Create Password" name="email" autocomplete="off"></input>
                 </div>
                    <div className='buttons'>
                    <button type="submit" name="register" class="button login_button">Register</button>
                   </div>
            </div>
            </div>
        </div>
    );
  }
  
  export default Signup;