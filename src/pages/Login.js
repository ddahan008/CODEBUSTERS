import './LogIn.css';

function Login() {
    return (
        <div class="hm">
            <div class="titles">
                <h1 class="welcome_title">Welcome to Jobster</h1>
                <img src={require('./logo.png')} alt="sd" height={ 200} width={200}/>
                <h2 class="welcome_instruction">Log in to your account</h2>
            </div>
            <div class="login-box">
                <h2 class="text_align">Log In</h2>
                <label class="text_align fade">Don't have an account?  <strong><a href="/SignupPage">SIGN UP NOW</a></strong></label>
                <input type="text" class="input_feilds" placeholder="Username / Email Address" name="email" autocomplete="off"></input>
                <input type="text" class="input_feilds" placeholder="Password" name="email" autocomplete="off"></input>
                <div class="login_buttons">
                    <button type="submit" name="login" class="button login_button">Log In</button>
                    <button type="submit" name="google_login" class="button google_login_button">Sign in with Google</button>
                </div>
            </div>
        </div>
    );
  }
  
  export default Login;