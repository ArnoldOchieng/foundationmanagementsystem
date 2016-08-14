<?php
$link = mysqli_connect("localhost","root1","password")  or die("failed to connect to server !!");
mysqli_select_db($link,"all_sports");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phoneno=$_POST['phoneno'];
$farmname=$_POST['farmname'];
$farmid=$_POST['farmid'];
$county=$_POST['county'];
$ward=$_POST['ward'];
$crop1=$_POST['crop1'];
$crop1weight=$_POST['crop1weight'];
$crop2=$_POST['crop2'];
$crop2weight=$_POST['crop2weight'];
$crop3=$_POST['crop3'];
$crop3weight=$_POST['crop3weight'];
$crop4=$_POST['crop4'];
$crop4weight=$_POST['crop4weight'];
$farmerid=$_POST['farmerid'];
$email=$_POST['email'];
 
// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `all_sports`.`agriculturefarms`
(`firstname`, `lastname`, `phoneno`, `farmname`, `farmid`,
`county`, `ward`, `crop1`, `crop1weight`,`crop2`, `crop2weight`,`crop3`, `crop3weight`,`crop4`, `crop4weight`,`farmerid`, `email`) VALUES ('$firstname', '$lastname', 
'$phoneno', '$farmname', '$farmid', '$county', '$ward', '$crop1','$crop1weight','$crop2','$crop2weight','$crop3','$crop3weight','$crop4','$crop4weight','$farmerid', '$email')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
}
}
?>