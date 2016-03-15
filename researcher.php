<html>
<head>
<title>Researcher Home</title>
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="headerstyle.css" />
</head>

<body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '414891405371625',
      xfbml      : true,
      version    : 'v2.5',
      cookie     : true
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
    
                document.getElementById('fbid').value = localStorage.fbid;

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
        <li><a href="account.php"><span class="glyphicon glyphicon-user"></span>
        <p>User</p></a>
        </li>
      
      </ul>
      </div>
   </div>
</nav>

<div class="jumbotron">
<div class="container">
<h3><button type="button" class="btn btn-default"><a href="new-study.php">Submit a new study</a></button></h3>
</div>
</div>

<div class="content">
<div class="container">
<h3>Here are the studies you have previously uploaded:</h3>

<div class = "panel group">
	<div class = "panel panel-default">	
		<div class = "panel-heading">Study 1</div>
		<div class = "panel-body">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "
SELECT user, name, type, location, comment 
FROM studies
WHERE study_id = '1'
"


$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> Researcher ". $row["user"]. " <br> Study name: ". $row["name"]. " <br> Location ". $row["location"]. " <br> Description ". $row["comment"] . "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();

?>  
</div>
</div>

		<div class = "panel-heading">Study 2</div>
		<div class = "panel-body">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "
SELECT user, name, type, location, comment 
FROM studies
WHERE study_id = '3'
";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> Researcher ". $row["user"]. " <br> Study name: ". $row["name"]. " <br> Location ". $row["location"]. " <br> Description ". $row["comment"] . "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  

</div>
</div>

</div>
</div>

    
</body>

</html>


