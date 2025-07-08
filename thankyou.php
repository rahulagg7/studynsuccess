<?php 

if(isset($_POST['submit'])){
  
  $name=$_POST['name'];
  $emailid=$_POST['email'];
  $course=$_POST['course'];
  $phoneno=$_POST['phone'];
  $mobileregex = "/^[6-9][0-9]{9}$/" ;

    if ($name!="" && $emailid!="" && $phoneno!="") {

      if(preg_match($mobileregex, $phoneno) === 1){

    $sender='info@studynsuccess.in';
    $subject='Registration Form Study N Success!';
    $message="Name - ".$_POST['name']."<br>"."Email - ".$_POST['email']."<br>"."Mobile Number - ".$_POST['phone']."<br>"."Course - ".$_POST['course'];
    $email=$_POST['email'];
    $to ='info@studynsuccess.in, studynsuccess2017@gmail.com';
    $std_message='Thanks For Submitting Your Details at Study N Success. We will Contact you Shortly.';

        $header = "From:".$sender."\r\n";
        $header.="Reply-To: ".$sender."\r\n" ;
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";        
        $retval = mail ($to,$subject,$message,$header);
        mail ($email,'Study N Success',$std_message,$header);

}
}
}

elseif(isset($_POST['contactno'])){
  $phoneno=$_POST['phoneno'];
  $mobileregex = "/^[6-9][0-9]{9}$/" ;

    if ($phoneno!="") {

      if(preg_match($mobileregex, $phoneno) === 1){

    $sender='info@studynsuccess.in';
    $subject='Request a Callback!';
    $message="Mobile Number - ".$_POST['phoneno'];
    $email=$_POST['email'];
    $to ='info@studynsuccess.in, studynsuccess2017@gmail.com';
    $std_message='Thanks For Submitting Your Details at Study N Success. We will Contact you Shortly.';

        $header = "From:".$sender."\r\n";
        $header.="Reply-To: ".$sender."\r\n" ;
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";        
        $retval = mail ($to,$subject,$message,$header);
        mail ($email,'Study N Success',$std_message,$header);

}
}

}

else{
           echo "<script>window.location.href='https://studynsuccess.in/';</script>";
        header('Location:https://studynsuccess.in/');
    }

 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Thankyou Page Study N Success</title>

<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: #000000;
  font-size: 25px;
}


.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>


</head>

<body>

<div class="bgimg">
  
  <div class="middle">
    <img src="https://studynsuccess.in/assets/img/study-nd.svg" style="width: 280px;">
    <hr>
    <p><b>Thank You For Submitting Your Details <br>Our Team Will Get in Touch with You Shortly.</b></p>
  </div>

</div>
 <script type="text/javascript">
        setInterval(function(){ window.location.assign("https://studynsuccess.in/")},9000);
    </script>
</body>
</html>
