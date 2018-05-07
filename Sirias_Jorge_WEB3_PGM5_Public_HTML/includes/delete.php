  <!-- ***********************************************************************************
  Page Name  : Delete.php 
  Author     : Jorge Sirias 
  Your URL   : ocelot-aul.fiu/~jsiri004
  Course     : CGS 4854 WEB 3, T & TH, 7:50-9:05 PM
  Program #  : Assignment #3
  Purpose    : This page deletes a record in the database 

  Due Date   : 03/22/2018 

  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jorge Sirias }..........
 ******************************************************************************* -->

<html>
  
  <body>

    <?php

      $record = "RECORD ".$Telephone." DELETED."."<br>";
    
      
      $found = $_POST['found'];
 
      //echo "Found = $found";


      $sql = "DELETE FROM Customers WHERE Telephone = '$Telephone'";

      $Telephone = trim($Telephone);

      if( (strlen(trim($found)) > 0 ) && ($found == $Telephone) )
      {

        //echo "$found is bigger than 0 and is equal to $Telephone"."<br>";

        if(mysqli_query($connection, $sql))
        {
        
          $message ="<span style=\"color: red;\">RECORD $found DELETED</span><br\>";
          $found="";

        }
        else
        {
           $message = "Error Deleting Record: ".mysqli_error($connection);

        }

      }
      else
      {

           $message = "<span style=\"color: red;\">RECORD $found CANNOT BE DELETED, IT DOES NOT EXISTS</span><br\>";

      }

    ?>    

  </body>

</html>
