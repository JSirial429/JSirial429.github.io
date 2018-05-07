
<!-- ***********************************************************************************
  Page Name  : mailer.php 
  Author     : Jorge Sirias 
  Your URL   : ocelot-aul.fiu/~jsiri004
  Course     : CGS 4854 WEB3, T & TH, 7:50-9:05PM
  Program #  : Assignment #4
  Purpose    : This page acts as a controlller that extracts data from the contact us page
               and using those values sends a pre-filled email 

  Due Date   : 4/5/2018 

  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jorge Sirias }..........
 ******************************************************************************* -->

<html>

<head><title>Sirias Jorge mailer.php</title></head>

<body>

  <div align="center">

    <!----This allows the user to go back to any parts of the website without using
    the back broswer button---->
    <?php include 'mainMenuPGM4.php'; ?>

  </div>

  <br><br>  

  <?php 

    //echo "I have called the mailer app"."<br>";

    if(isset($_POST['Submit'])) 
    { 
      //echo "I am inside the if statement"."<br>";
      $to          = "michael.robinson@cs.fiu.edu"; 
      $subject     = "Jorge Sirias WEB 3 PGM4"; 
      $Name_field  = $_POST['Name']; 
      $Email_field = $_POST['EMail']; 
      $Telephone   = $_POST['Telephone'];  
      $Message     = $_POST['Comment'];

      //foreach($_POST['check'] as $value) 
      //{ 
      //    $check_msg .= "Yes, $value\n"; 
      //} 

      //echo $to."<br>";
      //echo $subject."<br>";
      //echo $Name_field."<br>";
      //echo $Email_field."<br>";
      //echo $Telephone."<br>";
      //echo $Message."<br>";

      $body = " From: $Name_field\n E-Mail: $Email_field\n Tel: $Telephone\n Message:\n $Message\n\n ";

      mail($to, $subject, $body); 
     
	 //Message presented to the user acknowledging that message has been sent
     $received= "<span style=\"color: blue;\">Your request has been processed and you should receive a response from us shortly</span><br\>";
	 
	 echo $received;
	 

     // include('../includes/header.php');
     // include('../includes/selections.php');
     // include('../contactsus/mailerSubmitted.php');
     // include('../includes/mainMenu.php');
     // include('../includes/footerSingle.php');
    } 
    else 
    { 
      //echo "I am inside the else statement"."<br>";
      
	  //Message letting the client know we were unable to process their request
      $nreceived= "<span style=\"color: red;\">Your request could not be processed. Try again later.</span><br\>";
	  echo $nreceived;
      //include('../includes/header.php');
      //include('../includes/selections.php');
      //include('../contactsus/mailerError.php');
      //include('../includes/mainMenu.php');
      //include('../includes/footerSingle.php');
    }
 
  ?> 


</body>

</html>
