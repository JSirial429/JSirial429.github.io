<!-- ***********************************************************************************
  Author     : Jorge Sirias 
  Your URL   : ocelot-aul.fiu/~jsiri004
  Course     : CGS 4854 WEB 3, T & TH, 7:50-9:05 PM
  Program #  : Program 5 
               This is a controller for the leads fron end which will take user data and
               store it in a mySQL database using a leads table 

  Due Date   : 04/17/2018 
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jorge Sirias }..........

************************************************************************************** -->
<html>

  <head><title>Sirias Jorge Controllerleads</title></head>
    
    <body>

      <?php

        $Telephone  = $_POST['Telephone'];
        $FirstName   = $_POST['FName'];
        $LastName   = $_POST['LName'];
        $Email      = $_POST['Email'];

        //echo $Telephone."<br>".$FirstName."<br>".$LastName."<br>".$Email."<br>";


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
     
            $tableName = LeadsTable;
            $query = mysqli_query( $connection, "SELECT * FROM $tableName" );
            if(!$query)
            {
              //echo "The table ".$tableName." does not exist"."<br>"."Creating table: ".$tableName."<br>";
              //Creating SQL Table
              $sql = "CREATE TABLE ".$tableName."(
                     Telephone VARCHAR(20) NOT NULL,
                     PRIMARY KEY(Telephone),
                     LastName VARCHAR(30),
                     FirstName VARCHAR(30),
                     Email VARCHAR(30)
                     )";
              $result = mysqli_query( $connection, $sql );
              //Verify table was created
              if ($result)
              {
                //echo "Table ".$tableName." was created!";
              }
              else
              {
                die ("Cannot create ".$tableName." table: ".mysqli_error());
              }
            }//END OF If(!$query)
          }
        }//END OF else $connection

        if ($_POST['SUBMIT'])
        {

          include('saveLeads.php');
          include("leads.php");
        }
        else 
        {

          $message="<span style=\"color: red;\">YOU PRESSED AN UKNOWN BUTTON</span><br\>";

        }
        
        mysqli_close( $connection );

        //echo "I am done running this program";

      ?>

    </body>

</html>
