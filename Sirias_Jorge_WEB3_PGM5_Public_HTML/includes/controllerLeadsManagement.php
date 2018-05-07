<!-- ***********************************************************************************
  Author     : Jorge Sirias 
  Your URL   : ocelot-aul.fiu/~jsiri004
  Course     : CGS 4854 WEB 3, T & TH, 7:50-9:05 PM
  Program #  : Program 5 / Controller Leads Management 
               This controller pulls data from the leads table in the mySQL database and displays 
               it on the leads management front end. 

  Due Date   : 4/14/2018 
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jorge Sirias }..........

************************************************************************************** -->

<html>

  <body>

    <?php
       
        //echo "I have started to run this program"."<br>";
        //extract variable to track array's location
        $location=$_POST['location'];
        $location=(int)$location;
      
        //connect to Host
        $connection = mysqli_connect("ocelot.aul.fiu.edu","spr18_jsiri004","5481766","spr18_jsiri004");
    
        //Extract button pressed, If no button is pressed execute First button code.
        if($_POST['LAST'])
        {
          //here Telephone is the primary key, 
          $sql="SELECT * FROM LeadsTable order by Telephone ASC";
          
          if ($results=mysqli_query($connection,$sql))
          {
            //find the total number of rows and sets the location to last row.
            $rowcount=mysqli_num_rows($results);
            $location=$rowcount-1;
         
            //data_seek command moves the memory pointer in SQL table objects.
            //location must be INT or LONG.
            mysqli_data_seek($results, $location);
            
            $row=mysqli_fetch_assoc($results);
            
            $Telephone   = $row['Telephone'];
            $FirstName   = $row['FirstName'];
            $LastName    = $row['LastName'];
            $Email       = $row['Email'];    
            
          }//end if ($results=mysqli_query($connection,$sql))
          include ('leadsManagement.php'); 
        }//end if($_POST['Last'])
      
      
        else if($_POST['PREVIOUS'])
        {
          $sql="SELECT * FROM LeadsTable order by Telephone ASC";
          
          if ($results=mysqli_query($connection,$sql))
          {
            //Decrement location only if it is above the lowest possible value.
            if ($location >0)    
            {
              $location--;
            }                           
            mysqli_data_seek($results, $location);
            $row=mysqli_fetch_assoc($results);
            
            $Telephone = $row['Telephone'];
            $FirstName = $row['FirstName'];
            $LastName  = $row['LastName'];
            $Email     = $row['Email'];
          }//end if ($results=mysqli_query($connection,$sql))
          include ('leadsManagement.php');
        }//end else if($_POST['Previous'])
      
      
        else if($_POST['NEXT'])
        {
          $sql="SELECT * FROM LeadsTable order by Telephone ASC";
          
          if ($results=mysqli_query($connection,$sql))
          {
            //total number of rows for the upper limit of the search function.
            $rowcount=mysqli_num_rows($results);
              
            //Increment location only if it is below the highest possible value.
            if ($location <$rowcount-1)    
            {
              $location++;
            }                           
                        
            mysqli_data_seek($results, $location);
            $row=mysqli_fetch_assoc($results);
            
            $Telephone  = $row['Telephone'];
            $FirstName  = $row['FirstName'];
            $LastName   = $row['LastName'];
            $Email      = $row['Email'];    
            
          }//end if ($results=mysqli_query($connection,$sql))
          include ('leadsManagement.php');
        }//end else if($_POST['Next'])
    
    
        else //get First record
        {
          //Resets location to position 0, and grab the first record in the table.
          $location=0;    
          $sql="SELECT * FROM LeadsTable order by Telephone ASC limit 1";
             
          if ($result=mysqli_query($connection,$sql))
          {
            $row = mysqli_fetch_array( $result );
                
            $Telephone   = $row['Telephone'];
            $FirstName   = $row['FirstName'];
            $LastName    = $row['LastName'];
            $Email       = $row['Email'];     
          }//end if ($result=mysqli_query($connection,$sql))
      
          include ('leadsManagement.php'); 
        }//end else
    
        mysqli_close($connection); //close sql connection
        //echo "I have closed the mySQL connection";

    ?>

  </body>

</html>
