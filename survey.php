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
                localStorage.name = response.name;
                localStorage.fbid = response.id;

                console.log(JSON.stringify(response));
                document.getElementById('fbid').innerHTML = response.id;
                document.getElementById('name').innerHTML = response.name;

            });
          };
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
      <a class="navbar-brand mylogo" href="participant.html"><img src="nav-search-logo.png"></a>
    </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
        <li><a href="faq.html"><span class="glyphicon glyphicon-question-sign"></span>
        <p>FAQ</p></a>
        <li><a href="manual.html"><span class="glyphicon glyphicon-list"></span>
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
				<input type = "text" class = "form-control" id = "name" name = "name" placeholder = "First & Last Name">
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
			<label for = "birthday" class = "col-sm-2">Year Of Birth:</label>
			<div class = "col-sm-2">
				<input type = "year" class = "form-control" id = "year" name = "year" placeholder = "Year (YYYY)" value = "">
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
			<label for="indepedence" class = "col-sm-12">Please check the following tasks you are able to complete independently</label>
			<div class = "col-sm-6">
				<div class="checkbox">
					<label>
						<input type="checkbox" name ="eating" value ="eating"> 
						Eating
					</label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "bathing" value="bathing">
						Bathing
				  </label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "dressing" value="dressing">
						Dressing
					</label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "toileting" value="toileting">
						Toileting
					</label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "walking" value="walking">
						Walking
					</label>
				</div>
				
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "food_preparation" value="food_preparation">
						Food Preparation
					</label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "housekeeping_and_laundry" value="housekeeping_and_laundry">
						Housekeeping and Laundry
				  </label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "managing_financial_matters" value="managing_financial_matters">
						Managing Financial Matters
					</label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "take_medication" value="take_medication">
						Take Medication
					</label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "transportation" value="transportation">
						Responsible for Transportation (public transit, etc)
					</label>
				</div>
			</div>
		</div>	
		
		<div class ="form-group">
			<label for="symptom" class = "col-sm-12">Please check all applicable symptoms you experience:</label>
			<div class = "col-sm-6">
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "memory_loss" value="memory_loss">
						Memory Loss
					</label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "impaired_judgement" value="impaired_judgement">
						Impaired Judgement
				  </label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "abstract_thinking" value="abstract_thinking">
						Difficulties with abstract thinking
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name = "reasoning" value="reasoning">
					Difficulty with reasoning
				  </label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "coordination" value="coordination">
						Difficulty with coordination and motor functions
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name = "disorientation" value="disorientation">
					Disorientation with time and place
				  </label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "inappropriate_behaviour" value="inappropriate_behaviour">
						Inappropriate Behaviour
					</label>
				</div>
			</div>
		</div>
		
		<div class ="form-group">
			<label for="interestedstudy" class = "col-sm-12">What Kind of Studies Are You Interested In?</label>
			<div class = "col-sm-6">
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "treatment_studies" value="treatment_studies">
						Treatment Studies
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name = "diagnostic_studies" value="diagnostic_studies">
					Diagnostics Studies
				  </label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name = "quality_of_life_studies" value="quality_of_life_studies">
						Quality of Life Studies
					</label>
				</div>
			</div>
		</div> 
		
        <input type= "hidden" id = "fbid" name="fbid" value="">
        
		<input class="btn btn-default" name = "submit" type="submit" value="Submit">
        
	</form>	
</div>
        
<script>            
    document.getElementById("name").value = localStorage.name;
    document.getElementById("fbid").value = localStorage.fbid;
</script>
</body>
</html>

<?php 

if (isset($_POST["fbid"])) {$fbid = $_POST["fbid"];}
    else {$fbid = NULL;}

if (isset($_POST["name"])){$name = $_POST["name"];}
	else{$name = NULL;}
if (isset($_POST["optionsRadios"])){$gender = $_POST["optionsRadios"];}
	else{$gender = NULL;}
if (isset($_POST["year"])){$year = $_POST["year"];}
	else{$year = NULL;}	
if (isset($_POST["submit"])){$province = $_POST["province"];}
	else $province = NULL;
if (isset($_POST["eating"])){$eating = 1;}
	else{$eating = 0;}
if (isset($_POST["bathing"])){$bathing = 1;}
	else{$bathing = 0;}
if (isset($_POST["dressing"])){$dressing = 1;}
	else{$dressing = 0;}
if (isset($_POST["toileting"])){$toileting = 1;}
	else{$toileting = 0;}
if (isset($_POST["walking"])){$walking = 1;}
	else{$walking = 0;}
if (isset($_POST["food_preparation"])){$food_preparation = 1;}
	else{$food_preparation = 0;}
if (isset($_POST["housekeeping_and_laundry"])){$housekeeping_and_laundry = 1;}
	else{$housekeeping_and_laundry = 0;}
if (isset($_POST["managing_financial_matters"])){$managing_financial_matters = 1;}
	else{$managing_financial_matters = 0;}
if (isset($_POST["take_medication"])){$take_medication = 1;}
	else{$take_medication = 0;}
if (isset($_POST["transportation"])){$transportation = 1;}
	else{$transportation = 0;}
if (isset($_POST["memory_loss"])){$memory_loss = 1;}
	else{$memory_loss = 0;}
if (isset($_POST["impaired_judgement"])){$impaired_judgement = 1;}
	else{$impaired_judgement = 0;}
if (isset($_POST["abstract_thinking"])){$abstract_thinking = 1;}
	else{$abstract_thinking = 0;}
if (isset($_POST["reasoning"])){$reasoning = 1;}
	else{$reasoning = 0;}
if (isset($_POST["coordination"])){$coordination = 1;}
	else{$coordination = 0;}
if (isset($_POST["disorientation"])){$disorientation = 1;}
	else{$disorientation = 0;}
if (isset($_POST["inappropriate_behaviour"])){$inappropriate_behaviour = 1;}
	else{$inappropriate_behaviour = 0;}
if (isset($_POST["treatment_studies"])){$treatment_studies = 1;}
	else{$treatment_studies = 0;}
if (isset($_POST["diagnostic_studies"])){$diagnostic_studies = 1;}
	else{$diagnostic_studies = 0;}
if (isset($_POST["quality_of_life_studies"])){$quality_of_life_studies = 1;}
	else{$quality_of_life_studies = 0;}

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli('127.0.0.1', 'root', '', 'test');
// Check connection
if ($conn->connect_error) {
 // die("Connection failed: " . $conn->connect_error);
} 
$fbid = mysql_real_escape_string($fbid);
$year = mysql_real_escape_string($year);
$gender = mysql_real_escape_string($gender);
$name = mysql_real_escape_string($name);
$province = mysql_real_escape_string($province);
$eating = mysql_real_escape_string($eating);
$bathing = mysql_real_escape_string($bathing);
$dressing = mysql_real_escape_string($dressing);
$toileting = mysql_real_escape_string($toileting);
$walking = mysql_real_escape_string($walking);
$food_preparation = mysql_real_escape_string($food_preparation);
$housekeeping_and_laundry = mysql_real_escape_string($housekeeping_and_laundry);
$managing_financial_matters = mysql_real_escape_string($managing_financial_matters);
$take_medication = mysql_real_escape_string($take_medication);
$transportation = mysql_real_escape_string($transportation);
$memory_loss = mysql_real_escape_string($memory_loss);
$impaired_judgement = mysql_real_escape_string($impaired_judgement);
$abstract_thinking = mysql_real_escape_string($abstract_thinking);
$reasoning = mysql_real_escape_string($reasoning);
$coordination = mysql_real_escape_string($coordination);
$disorientation = mysql_real_escape_string($disorientation);
$inappropriate_behaviour = mysql_real_escape_string($inappropriate_behaviour);
$treatment_studies = mysql_real_escape_string($treatment_studies);
$diagnostic_studies = mysql_real_escape_string($diagnostic_studies);
$quality_of_life_studies = mysql_real_escape_string($quality_of_life_studies);

$sql = "INSERT INTO basic_info (FB_user_id, birth_year, sex, name, province,
eating, bathing, dressing, toileting, walking, food_preparation, 
housekeeping_and_laundry, managing_financial_matters, take_medication, 
transportation, memory_loss, impaired_judgement, abstract_thinking, 
reasoning, coordination, disorientation, inappropriate_behaviour, 
treatment_studies, diagnostic_studies, quality_of_life_studies)
VALUES ('$fbid', '$year', '$gender', '$name', '$province', '$eating', '$bathing',
'$dressing', '$toileting', '$walking', '$food_preparation', '$housekeeping_and_laundry',
'$managing_financial_matters', '$take_medication', '$transportation', '$memory_loss',
'$impaired_judgement', '$abstract_thinking', '$reasoning', '$coordination', 
'$disorientation', '$inappropriate_behaviour', '$treatment_studies', 
'$diagnostic_studies', '$quality_of_life_studies')";

// not sure if we need this
//mysql_query($sql) or trigger_error(mysql_error()." in ".$sql);

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();	
	
?>