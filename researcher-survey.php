<!DOCTYPE html>
<html lang = "en">
<head>
	<title>demENDtia Login Survey</title>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width,initial=scale=1.0">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="headerstyle.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>	

<body>
    <script>
        
        // This is called with the results from from FB.getLoginStatus().
      function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);

        if (response.status === 'connected') {
          // Logged into your app and Facebook.
          testAPI();
        }  
          else {
            window.location="index.html";       
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
        
        function testAPI() {
            FB.api('/me', function(response) {
                name = response.name);
            });
          }
    </script>
    <nav class="navbar navbar-default">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand mylogo" href="researcher.html"><img src="nav-search-logo.png"></a>
    </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
        <li><a href="new-study.php"><span class="glyphicon glyphicon-plus"></span>
        <p>New</p></a>
        <li><a href="info.html"><span class="glyphicon glyphicon-question-sign"></span>
        <p>FAQ</p></a>
        <li><a href="instructions.html"><span class="glyphicon glyphicon-list"></span>
        <p>Info</p></a>
        <li><a href="account.html"><span class="glyphicon glyphicon-user"></span>
        <p>User</p></a>
        </li>
      
      </ul>
      </div>
   </div>
</nav>

<div class="jumbotron">
<div class="container">
	<h3>To get you started, please fill out the following survey:</h3>
</div>
</div>

<div class="container">
	<form class = "form-horizontal" method = "post">
	<div class = "container">
	<form class = "form-horizontal">
		<div class = "form-group">
			<label for = "name" class = "col-sm-2">Name:</label>
			<div class = "col-sm-6">
				<input type = "text" class = "form-control" id = "name" name = "name" placeholder = "First & Last Name" value = "">
			</div>	
		</div>	
    <div class = "form-group">
			<label for = "orcid" class = "col-sm-2">Orcid ID:</label>
			<div class = "col-sm-6">
				<input type = "text" class = "form-control" id = "orcid" name = "orcid" placeholder = "ORCID ID" value = "">
			</div>	
		</div>	
	<div class = "form-group">
		<label for = "gender" class = "col-sm-2">Gender:</label>
		<div class = "radio-inline">
			<label class="radio-inline">
			  <input type="radio" name="optionsRadios" id="male" value="male"> Male
			</label>
			<label class="radio-inline">
			  <input type="radio" name="optionsRadios" id="female" value="female"> Female
			</label>
		</div>	
	</div>
		<div class = "form-group">
			<label for = "location" class = "col-sm-2">Location:</label>
			<div class = "col-sm-6">
				<select class="form-control" id="sel1" name = "province">
					<option value="" disabled selected hidden>Please Choose</option>
					<option value = "Alberta">Alberta</option>
			        <option value = "British Columbia">British Columbia</option>
					<option value = "Manitoba">Manitoba</option>
					<option value = "New Brunswick">New Brunswick</option>
					<option value = "Newfoundland and Labrador">Newfoundland and Labrador</option>
					<option value = "Nova Scotia">Nova Scotia</option>
			        <option value = "Ontario">Ontario</option>
					<option value = "Prince Edward Island">Prince Edward Island</option>
			        <option value = "Quebec">Quebec</option>
			        <option value = "Saskatchewan">Saskatchewan</option>
			        <option value = "North West Territories">North West Territories</option>
			        <option value = "Nunavut">Nunavut</option>
					<option value = "Yukon">Yukon</option>
				</select>
			</div>
		</div>
			
		<div class ="form-group">
			<label for="indepedence" class = "col-sm-12">Please check the following types of studies you currently conduct:</label>
			<div class = "col-sm-6">
				<div class="checkbox">
					<label>
						<input type="checkbox" name ="diagnostic" value ="diagnostic"> 
						Diagnostic
					</label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "preventative" value="preventative">
						Preventative
				  </label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "quality" value="quality">
						Quality of life
					</label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "treatment" value="treatment">
						Treatment
					</label>
				</div>
			</div>
		</div>	
		
		<input class="btn btn-default" name = "submit" type="submit" value="Submit" onclick="redirection()">
		
	</form>	
</div>
</body>
</html>

<?php 
if (isset($_POST["fbid"])) {$fbid = $_POST["fbid"];}
    else {$fbid = NULL;}

if (isset($_POST["name"])){$name = $_POST["name"];}
	else{$name = NULL;}
if (isset($_POST["optionsRadios"])){$gender = $_POST["optionsRadios"];}
	else{$gender = NULL;}
if (isset($_POST["orcid"])){$birthYear = $_POST["orcid"];}
	else{$orcid = NULL;}	
if (isset($_POST["submit"])){$province = $_POST["province"];}
	else $province = NULL;
if (isset($_POST["preventative"])){$preventative = 1;}
	else{$preventative = 0;}
if (isset($_POST["diagnostic"])){$diagnostic = 1;}
	else{$diagnostic = 0;}
if (isset($_POST["treatment"])){$treatment = 1;}
	else{$treatment = 0;}
if (isset($_POST["quality"])){$quality = 1;}
	else{$quality = 0;}

if (isset($_POST['submit']))
    {   
    ?>
<script>
window.location = "researcher-thankyou.html";
</script>      
    <?php
    }
?>    
