  <!-- ***********************************************************************************
  Page Name  : modify.php
  Author     : Jorge Sirias
  Your URL   : ocelot-aul.fiu/~jsiri004
  Course     : CGS 4854 WEB 3, T & TH, 7:50-9:05 PM
  Program #  : Assignment #3
  Purpose    : This page modifies a record in the database

  Due Date   : 03/22/2018

  Certification:
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........{ Jorge Sirias }..........
 ******************************************************************************* -->

<html>
  
  <body>

    <?php

      $found = $_POST['found'];

      /*echo "modify found = [".$found."]"."<br>";

      echo $Telephone."<br>";
      echo $lastName."<br>";
      echo $firstName."<br>";
      echo $email."<br>";
      echo $requests."<br>";
      echo $Shipping."<br>";
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
     
      echo "Attempting to modify the record: ".$found."<br>";*/

      if( (strlen(trim($found)) > 0) && ($found == $Telephone) )
      {

        $query = "UPDATE Customers
                  SET LastName               = '$lastName',
                      FirstName              = '$firstName',
                      Email                  = '$email',
                      Requests               = '$requests',
                      Shipping               = '$Shipping',
                      DC_Publisher           = '$DCpublisher',
                      DC_Comic_Format        = '$DCcharacter',
                      Marvel_Publisher       = '$Mpublisher',
                      Marvel_Comic_Format    = '$Mcharacter',
                      Image_Publisher        = '$Ipublisher',
                      Image_Comic_Format     = '$Icharacter',
                      Valiant_Publisher      = '$Vcharacter',
                      Valiant_Comic_Format   = '$Vpublisher',
                      DarkHorse_Publisher    = '$DHpublisher',
                      DarkHorse_Comic_Format = '$DHcharacter'


                 WHERE Telephone = '$Telephone'";

        $sql = mysqli_query($connection, $query);
        //echo "I found the record $found and proceeding to modify!"."<br>";

        if ($sql)
        {

          $message = "<span style=\"color: blue;\">RECORD $found MODIFIED</span><br\>";

        }
        else
        {

          //echo "Problem updating record. MySQL Error: " . mysqli_error($connection)."<br>";
          $message = "<span style=\"color: blue;\">PROBLEM MODIFYING THE RECORD $found</span><br\>";
        
        }

      }
      else
      {
      
         $message = "<span style=\"color: red;\">RECORD $found CANNOT BE MODIFIED, FIND IT FIRST</span><br\>";

      }

      //echo "I am done running the modify program";

    ?>

  </body>

</html>
