<!-- ***********************************************************************************
  Page Name  : Controller3.php 
  Author       : Jorge Sirias 
  Your URL  : ocelot-aul.fiu/~jsiri004
  Course       : CGS 4854 Web 3, Tuesdays & Thursdays, 7:50 - 9:05 PM
  Program #  : Assignment 3
  Purpose      : Takes user input from the front end and connects to the back end 

  Due Date    : 03/22/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jorge Sirias }..........
 ******************************************************************************* -->

<html>

  <head>

    <title>Sirias J Controller3.php</title>

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

        $found          = $_POST['found'];

       /*
        echo "This is conroller3.php<br>";
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
          echo "You have pressed the Find button"."<br><br>";
        }
        else if ($_POST['SAVE'])
        {
          echo "You have pressed the Save button"."<br><br>";
        }
        else if ($_POST['MODIFY']) 
        {
          echo "You have pressed the Modify button"."<br><br>";
        }
        else if ($_POST['DELETE'])
        {
          echo "You have pressed the Delete button"."<br><br>";
        }
        else if ($_POST['ClearScreen'])
        {
          echo "You have pressed the ClearScreen button"."<br><br>";
        }
        */ 


        $connection = mysqli_connect("ocelot.aul.fiu.edu","spr18_jsiri004","5481766","spr18_jsiri004");
        if (mysqli_connect_errno())
        {
          echo "Failed to connect to mySQL: " . mysqli_connect_error();
        }
        else
        {
         //echo "I have connected to mySQL succesfully!"."<br>";
        
          $dbName="spr18_jsiri004";
          $db_Selected = mysqli_select_db( $connection, $dbName );


          if(!$db_Selected)
          {
            die( $dbName.' does not exist, cannot use it '.mysqli_error());
          }
          else
          {

           //echo "I have selected database: ".$db_Selected." ".$dbName."<br>";
     
            $tableName = Customers;

            $query = mysqli_query( $connection, "SELECT * FROM $tableName" );

            if(!$query)
            {

              echo "The table ".$tableName." does not exist"."<br>"."Creating table: ".$tableName."<br>"; 

              //Creating SQL Table
              $sql = "CREATE TABLE ".$tableName."(
                     Telephone VARCHAR(20) NOT NULL,
                     PRIMARY KEY(Telephone),
                     LastName VARCHAR(30),
                     FirstName VARCHAR(30),
                     Email VARCHAR(30),
                     Requests VARCHAR(200),
                     Shipping VARCHAR(20),
                     DC_Publisher VARCHAR(20),
                     DC_Comic_Format VARCHAR(20),
                     Marvel_Publisher VARCHAR(20),
                     Marvel_Comic_Format VARCHAR(20),
                     Image_Publisher VARCHAR(20),
                     Image_Comic_Format VARCHAR(20),
                     Valiant_Publisher VARCHAR(20),
                     Valiant_Comic_Format VARCHAR(20),
                     DarkHorse_Publisher VARCHAR(20),
                     DarkHorse_Comic_Format VARCHAR(20)
                     )";

              $result = mysqli_query( $connection, $sql );                    

              //Verify table was created
              if ($result)
              {
                echo "Table ".$tableName." was created!";
              }
              else
              {
                die ("Cannot create ".$tableName." table: ".mysqli_error());
              }

            }//END OF If(!$query)

          }

        }//END OF else $connection

        if ( $_POST['FIND'] )
        { 
          include('find.php');
        }
        else if ( $_POST['SAVE'] )
        { 
          include('save.php');
        }
        else if ( $_POST['MODIFY'] )
        {  
          include('modify.php');
        }
        else if ( $_POST['DELETE'] )
        { 
          include('delete.php');
        }
        else if ( $_POST['CLEAR'] )
        {
          include('clear.php');
        }
        else
        { 
          echo "<br><h1> you pressed UNKOWN button</h1>";   
        }

        mysqli_close( $connection );
        
        include("pgm3.php");

    ?>

  </body>

</html>


  
    
