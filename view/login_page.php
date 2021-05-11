
<link rel="stylesheet" href="<?=getUrl()?>/public/css/login.css">
<div class="container">
  <div class="frame">
    <div class="nav">
      <ul class"links">
        <li class="signin-active"><a class="btns">Sign in</a></li>
        <li class="signup-inactive"><a class="btns">Sign up </a></li>
      </ul>
    </div>
    <div ng-app ng-init="checked = false">
        <form class="form-signin" action="<?=getUrl().'/user-login'?>" method="post" name="form">
          <label for="username">Username</label>
          <input class="form-styling" type="text" name="email" placeholder="Enter Email"/>
          <label for="password">Password</label>
          <input class="form-styling" type="password" name="password" placeholder="Enter the password"/>
          <input type="checkbox" id="checkbox"/>
          <label for="checkbox" ><span class="ui"></span>Keep me signed in</label>
          <div class="btn-animate">
            <button class="btn-signin" type="submit">Sign in</button>
          </div>
        </form>
        
        <form class="form-signup" action="<?=getUrl().'/dashboard'?>" method="post" name="form">
          <label for="fullname">Full name</label>
          <input class="form-styling" type="text" name="fullname" placeholder=""/>
          <label for="email">Email</label>
          <input class="form-styling" type="text" name="email" placeholder=""/>
          <label for="password">Password</label>
          <input class="form-styling" type="text" name="password" placeholder=""/>
          <label for="confirmpassword">Confirm password</label>
          <input class="form-styling" type="text" name="confirmpassword" placeholder=""/>
          <a ng-click="checked = !checked" class="btn-signup">Sign Up</a>
        </form>
      
            <div  class="success">
              <svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 60 60" id="check" ng-class="checked ? 'checked' : ''">
                 <path fill="#ffffff" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314
                  c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042
                  c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578" />
                <div class="successtext">
                   <p> Thanks for signing up! Check your email for confirmation.</p>
                </div>
             </div>
      </div>
      
    
  </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    
$(function() {
	$(".btns").click(function() {
		$(".form-signin").toggleClass("form-signin-left");
        $(".form-signup").toggleClass("form-signup-left");
        $(".signup-inactive").toggleClass("signup-active");
        $(".signin-active").toggleClass("signin-inactive");
        $(".forgot").toggleClass("forgot-left");   
        $(this).removeClass("idle").addClass("active");
	});
});

</script>
