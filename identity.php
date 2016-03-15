<!doctype HTML>
<html>
<head>

<title>Welcome to </search></title>
	<link rel = "stylesheet" href = "identity.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


	
	<script>
	$(function() {
	$("input[name$='value']").click(function() {
	    var value = $(this).val();
	    if (value == 'researcher') {
	        window.location.assign("researcher.html");
	    }
	    else if (value == 'participant') {
	        window.location.assign("survey.php");
	    }
	});});
	</script>
    
</head>	

<body>
    <script>
      function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);

        if (response.status === 'connected') {
          // Logged into your app and Facebook.
          redirectOnLogin();
        } 
      }

      // This function is called when someone finishes with the Login
      // Button.  See the onlogin handler attached to it in the sample
      // code below.
      function checkLoginState() {
        FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
        });
      }

      window.fbAsyncInit = function() {
        FB.init({
          appId      : '414891405371625',
          xfbml      : true,
          version    : 'v2.5'
        });


          FB.getLoginStatus(function(response) {
              statusChangeCallback(response);
          });

      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));

      function redirectOnLogin() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
          console.log('Successful login for: ' + response.name);
          localStorage.fbid = response.id;
        });
      }
    </script>

    
    
<div class = "center">
	<h1>Are you a: </h1>
	
	<form>
			<input type = "radio" name = "value" value = "researcher" id = "researcher"> <label for = "researcher">Researcher</label><br><br>

			<input type = "radio" name = "value" value = "participant" id = "participant"> <label for = "participant">Participant</label>
			
	</form>
    <form method = "post">
        <input type = "hidden" name = "fbid" id = "fbid" value = "">
    </form>
</div>
    
<script>
    document.getElementById('fbid').value = localStorage.fbid;
</script>
    
</body>	
</html>
