  <!-- ***********************************************************************************
  Page Name  : Find.php 
  Author     : Jorge Sirias
  Your URL   : ocelot-aul.fiu/~jsiri004
  Course     : CGS 4854 WEB 3, T & TH, 7:50-9:05 PM
  Program #  : Assignment #3
  Purpose    : Finds a record in the databse before deleting or modifying it. 

  Due Date   : 03/22/2018 

  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{Jorge Sirias}..........
 ******************************************************************************* -->

<html>

  <body>

    <?php

      /*echo "find.php Telephone = [".$Telephone."]<br>";      
      echo $lastName."<br>";
      echo $firstName."<br>";
      echo $email."<br>";
      echo $requests."<br>";
      echo $DCpublisher."<br>";
      echo $DCcharacter."<br>";
      echo $Mpublisher."<br>";
      echo $Mcharacter."<br>";
      echo $Ipublisher."<br>";
      echo $Icharacter."<br>";
      echo $Vpublisher."<br>";
      echo $Vcharacter."<br>";
      echo $DHpublisher."<br>";
      echo $DHcharacter."<br>";
      echo $Shipping."<br>"; */
  
      //echo "find.php table: ".$tableName."<br>";
  
      //echo "found.php found = [".$found."]"."<br>";

      $found = $Telephone;

      //echo "found.php found telephone = ".$found."<br>";

      $sql="SELECT * FROM Customers WHERE Telephone = '$Telephone'"; 

      if ($result=mysqli_query($connection,$sql))
      {

        //printf("Result of mysqli_query(connection,sql) = %d<br>", $result);

        $rowCount = mysqli_num_rows($result);
 
        //printf("Result set has %d rows.\n",$rowCount);

        while($row = mysqli_fetch_array($result))
        {

          //echo "I am inside the while loop!"."<br>";

          $Telephone     = $row['Telephone'];     //primary key
          $firstName     = $row['FirstName'];     //type="text"
          $lastName      = $row['LastName'];      //type="text"
          $email         = $row['Email'];         //type="text"
          $requests      = $row['Requests'];      //type="textarea" 
          $Shipping      = $row['Shipping'];
          $DCpublisher   = $row['DC_Publisher'];
          $DCcharacter   = $row['DC_Comic_Format'];
          $Mpublisher    = $row['Marvel_Publisher'];
          $Mcharacter    = $row['Marvel_Comic_Format'];
          $Ipublisher    = $row['Image_Publisher'];
          $Icharacter    = $row['Image_Comic_Format'];
          $Vpublisher    = $row['Valiant_Publisher'];
          $Vcharacter    = $row['Valiant_Comic_Format'];
          $DHpublisher   = $row['DarkHorse_Publisher'];
          $DHcharacter   = $row['DarkHorse_Comic_Format'];  

          //echo "I was able to retieve data from the field"."<br>";  

        }  

      }// END OF IF STATEMENT

      //echo $Telephone."<br>"; 
      //echo $firstName."<br>";
      //echo $lastName."<br>";
      //echo $email."<br>";
      //echo $requests."<br>";

      $Telephone = trim($Telephone);

      if ($rowCount)
      {

        $found = $Telephone;
        //echo "I am inside the if(rowCount) is true"."<br>";
        $message = "<span style=\"color: blue;\">RECORD $found FOUND</span><br\>";

      }
      else
      {

        $message = "<span style=\"color: red;\">RECORD $found NOT FOUND</span><br\>";
        $found ="";
      }


      //echo "I'm Done. Exiting program";            

    ?>

  </body>

</html>
