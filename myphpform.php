<?php
$Name="";
$email="";
$Comment="";
$validatepassword="";
$validatecomment="";
$validateradio="";
$validatecheckbox="";
$v1=$v2=$v3="";
$validateemail="";
$Password="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$Name=$_REQUEST["name"]; 
$email=$_REQUEST["email"]; 
$Comment=$_REQUEST["comment"];
$Password=$_REQUEST["password"];

if(!empty($Name) && strlen($Name)>=5) 
{
    $Name="You are ".$Name;
}

else if(empty($Name))
{
    $Name="Name Cant be empty !!";
}
else if( strlen($Name)<5)
{
    $Name="Your Name Must contain at least 4 character !!";
}
else if(empty($Name) &&  strlen($Name)<5)
{
    $Name="Invalid Name formate !!";
}



if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="You Must Enter Valid Email";
}
else{
    $validateemail= "Your Email is ".$email;
}


if(strlen($Password)<8)
{
    $validatepassword=" Password Must Contain 8 character!!";
}
else{
    $validatepassword=$Password;
}



if(strlen($Comment)<20)
{
    $validatecomment=" Comment Must Contain 20 character!!";
}
else{
    $validatecomment=$Comment;
}

if(isset($_REQUEST["gender"]))
{
    $validateradio= "Gender - ".$_REQUEST["gender"];
}
else{
    $validateradio= "       Please Select Your Gender";
}




} 
 ?>