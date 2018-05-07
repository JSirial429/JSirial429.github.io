
<!-- ***********************************************************************************
  Page Name  : save.php 
  Author     : Jorge Sirias 
  Your URL   : ocelot-aul.fiu/~jsiri004
  Course     : CGS 4854 WEB 3, T & TH, 7:50 - 9:05
  Program #  : Assignment #3
  Purpose    : This page records data onto the customer table from fornt end or if data 
               already exists then it disregards the transaction 

  Due Date   : 03/22/2018 

  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jorge Sirias }..........
 ******************************************************************************* -->

<html>

  <body>
                 
    <?php

      /*echo $Telephone;
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

      //echo "inserting record into table ".$tableName."<br>";
      $Telephone=trim($Telephone);
      //echo $Telephone."<br>";

      if(strlen($Telephone)>0)
      {

        
           $sql="INSERT INTO Customers (
                 
                   Telephone,
                   LastName,
                   FirstName,
                   Email,
                   Requests,
                   Shipping,
                   DC_Publisher,
                   DC_Comic_Format,
                   Marvel_Publisher,
                   Marvel_Comic_Format,
                   Image_Publisher,
                   Image_Comic_Format,
                   Valiant_Publisher,
                   Valiant_Comic_Format,
                   DarkHorse_Publisher,
                   DarkHorse_Comic_Format

                 )
                 VALUES
                 (
                 
                   '$Telephone',
                   '$lastName',
                   '$firstName',
                   '$email',
                   '$requests',
                   '$Shipping',
                   '$DCpublisher',
                   '$DCcharacter',
                   '$Mpublisher',
                   '$Mcharacter',
                   '$Ipublisher',
                   '$Icharacter',
                   '$Vpublisher',
                   '$Vcharacter',
                   '$DHpublisher',
                   '$DHcharacter'

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
             //echo "<br>Error: " . $sql . "<br>" . mysqli_error($connection);
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
