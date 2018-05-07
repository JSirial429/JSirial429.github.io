<!-- ***********************************************************************************
  Page Name  : Controller2.php 
  Author       : Jorge Sirias 
  Your URL  : ocelot-aul.fiu/~jsiri004
  Course       : CGS 4854 Web 3, Tuesdays & Thursdays, 7:50 - 9:05 PM
  Program #  : Assignment 2
  Purpose      : Takes user input from the front end and displays it on the console to the user 

  Due Date    : 2/2/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jorge Sirias }..........
 ******************************************************************************* -->

<html>

  <head>

    <title>Sirias J Controller2.php</title>

  </head>

  <body>

    <?php

        $Telephone      = $_POST['Telephone'];
        $lastName       = $_POST['lastName'];
        $firstName      = $_POST['firstName'];
        $email          = $_POST['email'];
        $requests       = $_POST['requests'];
        $DCpublisher    = $_POST['DCpublisher'];
        $DCcharacter    = $_POST['DCcharacter'];
        $Mcharacter     = $_POST['Mcharacter'];
        $Mpublisher     = $_POST['Mpublisher'];
        $Ipublisher     = $_POST['Ipublisher'];
        $Icharacter     = $_POST['Icharacter'];
        $Vpublisher     = $_POST['Vpublisher'];
        $Vcharacter     = $_POST['Vcharacter'];
        $DHpublisher    = $_POST['DHpublisher'];
        $DHcharacter    = $_POST['DHcharacter'];
        $Shipping       = $_POST['Shipping'];

        echo "This is conroller2.php<br>";
        echo "<br>";
        echo "Telephone = ".$Telephone."<br>";
        echo "Last Name = ".$lastName."<br>";
        echo "First Name = ".$firstName."<br>";        
        echo "Email = ".$email."<br>";
        echo "Requests = ".$requests."<br>";
        echo "<br>";
        echo "Chosen publisher = ".$DCpublisher."<br>";
        echo "Chosen type of DC comic = ".$DCcharacter."<br>";
        echo "Chosen publisher = ".$Mpublisher."<br>";
        echo "Chosen type of Marvel comic = ".$Mcharacter."<br>";
        echo "Chosen publisher = ".$Ipublisher."<br>";
        echo "Chosen type of Image comic = ".$Icharacter."<br>";
        echo "Chosen publisher = ".$Vpublisher."<br>";
        echo "Chosen type of Valiant comic = ".$Vcharacter."<br>";
        echo "Chosen publisher = ".$DHpublisher."<br>";
        echo "Chosen type of Dark Horse comic = ".$DHcharacter."<br>";
        echo "<br>";
        echo "Selected shipping = ".$Shipping."<br>";
         
        if ($_POST['FIND'])
        {
          echo "You have pressed the Find button";
        }
        else if ($_POST['SAVE'])
        {
          echo "You have pressed the Save button";
        }
        else if ($_POST['MODIFY']) 
        {
          echo "You have pressed the Modify button";
        }
        else if ($_POST['DELETE'])
        {
          echo "You have pressed the Delete button";
        }
        else if ($_POST['ClearScreen'])
        {
          echo "You have pressed the ClearScreen button";
        }


    ?>

  </body>

</html>


  
    
