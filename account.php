
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function($) {
			$('#accordion').find('.acc-toggle').click(function(){
	
				//Expand or collapse this panel
				$(this).next().slideToggle('fast');
	
				//Hide the other panels
				$(".acc-content").not($(this).next()).slideUp('fast');
	
			});
		});
	</script>
		
<title>Account</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="account.css" />
<style>
#labelling{
	position:absolute;
	right:10px;
	bottom:10px;
}

h4{
	text-indent:70px;
}
</style>
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
      <a class="navbar-brand mylogo" href="index.html"><img src="nav-search-logo.png"></a>
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
<h3>Account Information</h3>
</div>
</div>

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
SELECT birth_year, name, sex, province
FROM basic_info
WHERE FB_user_id = '2147483647'
";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<h4>Name: </h4> ". <h4>$row["name"]</h4>. " <br> <h4>Gender</h4> ". $row["sex"]. " <br> <h4>Location:</h4> ". $row["province"]. " <br> <h4>Birth Year: </h4>". $row["birth_year"] . "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>


<div class="footer">
<div class="container">
<p id = "labelling"> &lt/search&gt | demENDtia 2015 </p>
</div>
</div>
</body>
</html>