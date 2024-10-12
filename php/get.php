<?php
/*
 I have created this file to store the information of user who will Fill  the contact form . Data will be stored in jubbydata database in my  localhost
please install or create the databse with table to run this script properly. Website must be hosted in webserver. i am providing the sql file to install database in server
*/
$c = mysqli_connect("localhost","root","", "jubbydata");
if (!$c)
 {
    //die("Could not connect....Error " . mysqli_connect_error());
    echo "<script>document.title ='cound not connet'</script>";
    
}
else
{
echo "<script>document.title ='connected'</script>";

$u = $_POST['username'];
$m = $_POST['message'];
$e = $_POST['useremail'];



$q = "INSERT INTO user (uname,message,uemail)
VALUES ('$u', '$m', '$e')";

if (mysqli_query($c, $q))
 {
    echo "<h1 style='color:white;background:black;'>Thanks For Contacting me I will be in Touch soon</h1>";
  echo "<h1><a href='http://localhost/assignment_ver3_4_24_5_18' >Click to cont...'</a></h1>";
}
else
 {
    echo "<h1 style='color:red'> Error:-something is Wrong:- " . $q . "<br>" . mysqli_error($c)."</h1>";
    echo "<h1> <a href='http://localhost/assignment_ver3_4_24_5_18' >Click to cont...'</a></h1>";
}

mysqli_close($c);
}


?>
<!Doctype html>
<body bgColor ="#347AB6">
</body>
</html>

