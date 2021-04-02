<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap1.css"/>
<link rel="stylesheet" type="text/css" href="bootsrap2.css"/>
<link rel="stylesheet" href="style.css">
</head>

<body class="bg-info">

<div class="row justify-content-center">
<div class="col-lg-10 bg-light rounded my-2 py-2">
<center>
    <img src="delta_logo.jpg">
</center>
<hr>
<center>
<div id="title" name="title"> LOG IN </div> 
<form method="GET" action=''> 
<input id="username" name="username" class="form-control" placeholder="Enter Username" style="margin-bottom:10px;"/>
<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" style="margin-bottom:10px;"/>
<input type="submit" class="btn btn-info"/>
</center>
</form>
<?php
include("config.php");
$conn = sqlsrv_connect( $servername, $connectioninfo); 
$username=$_GET['username'] ?? "";
$password=$_GET['password'] ?? "";
$query="select username from _CPLUSERS where username='".$username."' and password='".$password."'";
$result=sqlsrv_query($conn,$query);
if ($result) {
    while($row = sqlsrv_fetch_array($result)) {
        header("Location:Home.php");
        }
}
else {
    echo "User doesn't exist!";
}
sqlsrv_close($conn);
?>
</div>
</div>
</div>
<title>
</title>
<script src="script.js">
</script>
</body>
</html>