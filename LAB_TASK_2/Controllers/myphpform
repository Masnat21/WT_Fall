<?php
$Name="";
$email="";
$Comment="";
$mobileno="";
$house="";
$NID="";
$dob="";
$validatedob="";
$validatenid="";
$validatehouse="";
$validatemobileno="";
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
$house=$_REQUEST["house"];
$nid=$_REQUEST["nid"];
$dob=$_REQUEST["dob"];

if(!empty($Name) && strlen($Name)>=5) 
{
    $Name="You are ".$Name;
}

else if(empty($Name))
{
    $Name="Name is empty !!";
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
    $validateradio= "Please Select Your Gender";
}

  if (strlen ($mobileno) != 11)
  {  
     $validatemobileno= "Mobile no must contain 11 digits.";  
  }  
  else{
    $validatemobileno=$mobileno;
} 

 if(empty($house) || !preg_match(("/[a-z\s]/i"),$_REQUEST["house"]))  
{
    $validatehouse="You Must Enter your House";
}
else{
    $validatehouse= "Your House is ".$house;
}




if(!preg_match("/^(0?[1-9]|[12][0-9]|3[01])\/\.- \/\.- \d{2}$/", $dob))
 {
    $validatedob='Date'.$_REQUEST["dob"];
 }
    else{
    $validatedob= "Please Select Your age".$dob;
 }
if(!preg_match("/[0-9]/", $nid))
    {
        $validatenid="Enter NID".$_REQUEST["nid"];
    }
    else{
        
        $validatenid= "Your NID is ".$nid;
    }



    


   // if($hasError==0){

    $existingdata = file_get_contents('data.json');
    $existingdatainphp = json_decode($existingdata);

$myarray=array(
    "Name"=> $_REQUEST["name"],
    "Gender"=> $_REQUEST["gender"],
    "email"=> $_REQUEST["email"],
    "Password"=> $_REQUEST["password"],
    'mobileno'=> "$validatemobileno",
    "house"=> $_REQUEST["house"],
    "nid"=> $_REQUEST["nid"],
    "dob"=> $_REQUEST["dob"],
    "Comment"=> $_REQUEST["comment"],
);
   $existingdatainphp[]=$myarray;
    $myjsondata = json_encode( $existingdatainphp, JSON_PRETTY_PRINT);
    file_put_contents('data.json', $myjsondata);
    //$mydata = file_get_contents("../data/data.json");
    //$myphpdata = json_decode($mydata)

}
//}
 ?>
