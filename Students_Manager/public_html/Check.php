<?php 
include './Registered.php';
$stu_name=$_POST["n_Name"];
$stu_mail=$_POST["n_Email"];
$loginbtn=$_POST["logbtn"];
if(isset($loginbtn)&& !empty($stu_name)&& !empty($stu_mail)){
    if (($stu_name==$stu->$n_Name)&&($stu_mail=$stu->$n_Mail)) {
        echo 'Success';
        header("Location: InnerPage.html");
    }
 else {
        echo 'Wrong name or email';    
    }
}


?>
