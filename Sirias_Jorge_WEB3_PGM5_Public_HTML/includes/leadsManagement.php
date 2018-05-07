<!-- ***********************************************************************************
  Author     : Jorge Sirias 
  Your URL   : ocelot-aul.fiu/~jsiri004
  Course     : CGS 4854 WEB 3, T & TH, 7:50 - 9:05 PM
  Program #  : PGM 5/Leads Management
               The leads management front end allows a user to pull up leads contact info
               from the leads table databse. The front end display this data

  Due Date   : 4/17/2018 
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jorge Sirias }..........

************************************************************************************** -->

<html>

  <head><title>Sirias Jorge Leads</title></head>

<!--------------------------------Tool Tip---------------------------------->
    <style>
    .tooltip
    {
      position: relative;
      display: inline-block;
    }

    .tooltip .tooltiptext
    {
      visibility: hidden;
      width: 120px;
      background-color: white;
      color: seagreen;
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      margin-left: -60px;
      opacity: 0;
      transition: opacity 1s;
    }

    .tooltip .tooltiptext::after
    {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: orangered transparent transparent transparent;
    }
      
    .tooltip:hover .tooltiptext
    {
      visibility: visible;
      opacity: 1;
    }

    </style> 
<!--------------------------END OF Tooltip--------------------->


  <body bgcolor="mediumturquoise">

    <div align="center">

      <?php include'mainMenuPGM5.php'; ?>

    </div>
    
    <?php include'timeLog.html'; ?>

    <br>

    <div align="center">

      <form method="post" action="controllerLeadsManagement.php">

        <table border="0">

          <tr>

            <td style="color:black;">
               
              <div class="tooltip">Telephone  &nbsp;  &nbsp;  &nbsp;

                <span class="tooltiptext"><font color="orangered">Required!</font></span>

              </div>

            </td>
  
            <td><input type="text" size="25" name="Telephone" placeholder="Telephone" value="<?php echo $Telephone ?>" ></td>

          </tr>

          <tr>

            <td style="color:black;">

              <div class="tooltip">First Name  &nbsp;  &nbsp;  &nbsp;

                <span class="tooltiptext"><font color="orangered">No nicknames or aliases</font></span>

              </div>

            </td>

            <td><input type="text" size="25" name="FName" placeholder="First Name" value="<?php echo $FirstName ?>" ></td>

          </tr>      

          <tr>

            <td style="color:black;">

              <div class="tooltip">Last Name  &nbsp;  &nbsp;  &nbsp;

                <span class="tooltiptext"><font color="orangered">No nicknames or aliases</font></span>

              </div>

            </td>

            <td><input type="text" size="25" name="LName" placeholder="Last Name" value="<?php echo $LastName ?>" ></td>

          </tr>

          <tr>

            <td style="color:black;">

              <div class="tooltip">Email  &nbsp;  &nbsp;  &nbsp;

                <span class="tooltiptext"><font color="orangered">Valid emails only</font></span>

              </div>

            </td>

            <td><input type="text" size="25" name="Email" placeholder="Email" value="<?php echo $Email ?>" ></td>

          </tr>

        </table>
 
      <br>

      <?php echo $message; ?>

      <!------------Submit Buttons------------------->
      <br><br>

      <input type="submit" name="FIRST"     value="FIRST">
      <input type="submit" name="NEXT"      value="NEXT">
      <input type="submit" name="PREVIOUS"  value="PREVIOUS">
      <input type="submit" name="LAST"      value="LAST">
      <input type="hidden" name="location" value="<?php echo $location; ?>">      
      </form>

    </div>

  </body>

</html>
