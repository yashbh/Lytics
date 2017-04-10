<html>
<head>
  <title>Sign Up</title>
   <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="css/materialize.min.css">
  <!-- icons-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <style type="text/css">
    body {
    background-image: url("communication.jpg");
     background-repeat: repeat-x repeat-y;
     background-size: 49%;
}
  </style>
</head>
<body>

<div class="container">
<div class="row center-align">
      <div class="col s12 center-align">
       <br><br>
        <div class="card-panel z-depth-5 " >
       <div class="card-image">
         <img src="img4.png" alt="" height="80px" width="230px;">
       </div>
         
          <div class="row ">
        <form class="col s12 " method="post" action="signup1.php">
          <div class="row">
            <div class="input-field col s8 " style="left: 120px;">
              <i class="mdi-social-person-outline prefix"></i>
              <input id="user" type="text" name="user" >
              <label for="user">Username</label>
            </div>
          </div>
          <div class="row ">
            <div class="input-field col s8 " style="left: 120px;">
              <i class="mdi-action-lock-outline prefix"></i>
              <input id="password" type="password" class="validate" name="pass">
              <label for="password">Password</label>

            </div>
            
           </div>
          <div class="row">
           <div class="input-field col s6  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
              <div class="input-field col s6">
              <button class="waves-effect waves-light btn" name="submit">Login</button>
              </div>
            </div>
             <div class="row">
          <div class="input-field col s6">
            <p class="margin  medium-small center-align"><a href="page-register.html">Register Now!</a></p>
          </div>
          <div class="input-field col s6">
              <p class="margin  medium-small center-align-align"><a href="forgotpass.php">Forgot password ?</a></p>
          </div>          
        </div>
        </form>
         </div>
        </div>
      </div>
    </div>
    </div>
  <!-- Compiled and minified JavaScript -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script type="text/javascript" src="js/materialize.min.js"></script></script>        
</body>
</html>