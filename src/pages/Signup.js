import './LogIn.css';

function Signup() {
    return (
        <div>
            <div class="titles">
                <h1 class="welcome_title">Ready to sign up?</h1>
                <img src={require('./logo.png')} alt="sd" height={ 200} width={200}/>
                <h2 class="welcome_instruction">Set up your account</h2>
            </div>
            <div class="login-box">
                <h2 class="text_align">Sign Up</h2>
                <label class="text_align fade">Have an account?  <strong><a href="/LoginPage">LOG IN NOW</a></strong></label>
                <div class="name_feild_group">
                    <input type="text" class="first_name_feild name_feilds" placeholder="First Name" name="name" autocomplete="off"></input>
                    <input type="text" class="last_name_feild name_feilds" placeholder="Last Name" name="email" autocomplete="off"></input>
                    </div>
                        <input type="text" class="input_feilds" placeholder="Email Address" name="email" autocomplete="off"></input>
                        <input type="text" class="input_feilds" placeholder="Create Password" name="email" autocomplete="off"></input>
                    <div class="login_buttons">
                    <button type="submit" name="register" class="button login_button">Register</button>
                </div>
            </div>
        </div>
    );
  }
  
  export default Signup;