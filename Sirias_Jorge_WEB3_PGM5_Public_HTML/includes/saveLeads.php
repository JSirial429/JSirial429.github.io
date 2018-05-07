
<!-- ***********************************************************************************
  Page Name  : saveLeads.php 
  Author     : Jorge Sirias 
  Your URL   : ocelot-aul.fiu/~jsiri004
  Course     : CGS 4854 WEB 3, T & TH, 7:50 - 9:05
  Program #  : Assignment #5
  Purpose    : This page records data onto the Leads table from the leads front end

  Due Date   : 03/22/2018 

  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jorge Sirias }..........
 ******************************************************************************* -->

<html>

  <body>
                 
    <?php

      /*echo $Telephone."<br>";
      echo $LastName."<br>";
      echo $FirstName."<br>";
      echo $Email."<br>";
       */

      //echo "inserting record into table ".$tableName."<br>";
      $Telephone=trim($Telephone);
      //echo $Telephone."<br>";

      if(strlen($Telephone)>0)
      {

        
           $sql="INSERT INTO LeadsTable (
                 
                   Telephone,
                   FirstName,
                   LastName,
                   Email

                 )
                 VALUES
                 (
                 
                   '$Telephone',
                   '$FirstName',
                   '$LastName',
                   '$Email'

                 )";


          //echo "I am inside strlen($Telephone)>0"."<br>";
     
    
          if (mysqli_query($connection,$sql))
          {
          
            //echo "I have inserted record $Telephone to the record"."<br>";
            $message = "<span style=\"color:blue;\">RECORD $Telephone ADDED</span><br\>";         

          }
          else
          {
             //echo "I am inside the inner else statement";
             echo "<br>Error: " . $sql . "<br>" . mysqli_error($connection);
             $message = "<span style=\"color: red;\">RECORD $Telephone ALREADY EXISTS</span><br\>"; 
               

          }//END of else 
     
      }//END of Strlen($Telephone)>0 
      else
      {       
       
        $message="<span style=\"color: red;\">RECORD NOT ADDED, TELEPHONE CANNOT BE EMPTY!</span><br\>";

      }  

      //echo "I am done running the program!";

   ?>

  </body>

</html>
