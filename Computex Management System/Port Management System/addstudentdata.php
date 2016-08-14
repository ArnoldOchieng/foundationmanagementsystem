<?php
$link = mysqli_connect("localhost","root1","password")  or die("failed to connect to server !!");
mysqli_select_db($link,"students");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$id=$_POST['id'];
$firstname=$_POST['firstname'];
$surname=$_POST['surname'];
$othernames=$_POST['othernames'];
$phoneno=$_POST['phoneno'];
$nameofschool=$_POST['nameofschool'];
$classform=$_POST['classform'];
$gender=$_POST['gender'];
$admno=$_POST['admno'];
$annualfee=$_POST['annualfee'];
$bankname=$_POST['bankname'];
$accountname=$_POST['accountname'];
$accountno=$_POST['accountno'];
$branch=$_POST['branch'];
$date=$_POST['date'];
$email=$_POST['email'];
 
// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `students`.`studentdetails`
(`id`,`firstname`,`surname`, `othernames`, `phoneno`, `nameofschool`, `classform`,`gender`,
`admno`, `annualfee`, `bankname`, `accountname`,`accountno`, `branch`,`date`, `email`) VALUES ('$id','$firstname','$surname', '$othernames','$phoneno', '$nameofschool', '$classform','$gender', '$admno', '$annualfee', '$bankname','$accountname','$accountno','$branch','$date','$email')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
}
}
?>