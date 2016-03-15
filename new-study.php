
<html>
<head>
<title>Researcher Home</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="headerstyle.css" />
</head>

<body>

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
        <li><a href="profile.html"><span class="glyphicon glyphicon-user"></span>
        <p>User</p></a>
        </li>
      
      </ul>
      </div>
   </div>
</nav>

<div class="jumbotron">
<div class="container">
<p>Please fill out the following form to submit a study.</p>
</div>
</div>

<div class="study-form">
<div class="container">

<form class="form-horizontal" role="form" method="post">

<div class="form-group">
<label for="user">Your name:</label>
<input type="text" class="form-control" id="user" name = "user">

</div>

<div class="form-group">
<label for="name">Name of study:</label>
<input type="text" class="form-control" id="name" name = "name">

</div>

<div class="form-group">
<label for="location">Location:</label>
<input type="text" class="form-control" id="location" name ="location">

</div>

<div class="form-group">
<label>What type of study is it?</label><br/>
<label><input type="radio" name="type" value="diagnostic">Diagnostic</label><br/>
<label><input type="radio" name="type" value="treatment">Treatment</label><br/>
<label><input type="radio" name="type" value="prevention">Prevention</label></br>
<label><input type="radio" name="type" value="quality">Quality of life</label></br>

</div>

<div class="form-group">
<label for="comment">Description of study:</label>
<textarea class="form-control" rows="7" id="comment" name = "comment">
</textarea>

</div>


<div class="form-group">
				
<label>Please check each box for the types of participants you require.</label><br/>
<label class="col-md-4"><input type="checkbox" name="male" value="male">Male</label>
<label class="col-md-4"><input type="checkbox" name="female" value="female">Female</label>

<br/>
<label class="col-md-4"><input type="checkbox" name="single" value="single">Single</label>
<label class="col-md-4"><input type="checkbox" name="married" value="married">Married</label>
<label class="col-md-4"><input type="checkbox" name="commonlaw" value="commonlaw">Common-law</label>
<br/>
<label class="col-md-3"><input type="checkbox" name="native" value="native">Native</label>
<label class="col-md-3"><input type="checkbox" name="asian" value="asian">Asian</label>
<label class="col-md-3"><input type="checkbox" name="black" value="black">Black</label>
<label class="col-md-3"><input type="checkbox" name="caucasian" value="caucasian">Caucasian</label>
<br/>
<label class="col-md-4"><input type="checkbox" name="early" value="early">Early onset</label>
<label class="col-md-4"><input type="checkbox" name="moderate" value="moderate">Moderate</label>
<label class="col-md-4"><input type="checkbox" name="severe" value="severe">Severe</label>
<br/>
<label class="col-md-4"><input type="checkbox" name="independent" value="independent">Independent</label>
<label class="col-md-4"><input type="checkbox" name="assistance" value="assistance">Require some assistance</label>
<label class="col-md-4"><input type="checkbox" name="dependent" value="dependent">Fully dependent</label>

</div>


<input class="btn btn-default" type="submit" value="send">




<div class="form group">
</div>
</form>

</div>

</div>
</div>

</body>
</html>

<?php 
if (isset($_POST["user"])){$user = $_POST["user"];}
	else{$user = NULL;}
if (isset($_POST["name"])){$name = $_POST["name"];}
	else{$name = NULL;}
if (isset($_POST["location"])){$location = $_POST["location"];}
	else{$locaton = NULL;}
if (isset($_POST["type"])){$type = $_POST["type"];}
	else{$type = NULL;}
if (isset($_POST["comment"])){$comment = $_POST["comment"];}
	else{$comment = NULL;}

if (isset($_POST["male"])){$male = 1;}
	else{$male = 0;}
if (isset($_POST["female"])){$female = 1;}
	else{$female = 0;}
if (isset($_POST["single"])){$single = 1;}
	else{$single = 0;}
if (isset($_POST["married"])){$married = 1;}
	else{$married = 0;}
if (isset($_POST["commonlaw"])){$commonlaw = 1;}
	else{$commonlaw = 0;}
if (isset($_POST["native"])){$native = 1;}
	else{$native = 0;}
if (isset($_POST["asian"])){$asian = 1;}
	else{$asian = 0;}
if (isset($_POST["black"])){$black = 1;}
	else{$black = 0;}
if (isset($_POST["caucasian"])){$caucasian = 1;}
	else{$causasian = 0;}
if (isset($_POST["early"])){$early = 1;}
	else{$early = 0;}
if (isset($_POST["moderate"])){$moderate = 1;}
	else{$moderate = 0;}
if (isset($_POST["severe"])){$severe = 1;}
	else{$severe = 0;}
if (isset($_POST["independent"])){$independent = 1;}
	else{$independent = 0;}
if (isset($_POST["assistance"])){$assistance = 1;}
	else{$assistance = 0;}
if (isset($_POST["dependent"])){$dependent = 1;}
	else{$dependent = 0;}

if (isset($_POST['submit']))
    {   
    ?>
<script>
window.location = "new-thankyou.html";
</script>      
    <?php
    }

?>

