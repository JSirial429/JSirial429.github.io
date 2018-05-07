<!-- ***********************************************************************************
  Author     : Jorge Sirias 
  Your URL   : ocelot-aul.fiu/~jsiri004
  Course     : CGS 4854 WEB 3, T & TH, 7:50 - 9:05 PM
  Program #  : PGM 5
               The leads fornt end allows user to leave contact information so that a 
               company can expand their customer base. This leads file will connect to 
               a controller that will store customer info in a database. 

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


  <body bgcolor="skyblue">

    <div align="center">

      <?php include'mainMenuPGM5.php'; ?>

    </div>
    
    <?php include'timeLog.html'; ?>

    <br>

    <div align="center">

      <form method="post" action="controllerleads.php">

        <table border="0">

          <tr>

            <td style="color:seagreen;">
               
              <div class="tooltip">Telephone  &nbsp;  &nbsp;  &nbsp;

                <span class="tooltiptext"><font color="orangered">Required!</font></span>

              </div>

            </td>
  
            <td><input type="text" size="30" name="Telephone" placeholder="Telephone"></td>

          </tr>

          <tr>

            <td style="color:seagreen;">

              <div class="tooltip">First Name  &nbsp;  &nbsp;  &nbsp;

                <span class="tooltiptext"><font color="orangered">No nicknames or aliases</font></span>

              </div>

            </td>

            <td><input type="text" size="30" name="FName" placeholder="First Name"></td>

          </tr>      

          <tr>

            <td style="color:seagreen;">

              <div class="tooltip">Last Name  &nbsp;  &nbsp;  &nbsp;

                <span class="tooltiptext"><font color="orangered">No nicknames or aliases</font></span>

              </div>

            </td>

            <td><input type="text" size="30" name="LName" placeholder="Last Name"></td>

          </tr>

          <tr>

            <td style="color:seagreen;">

              <div class="tooltip">Email  &nbsp;  &nbsp;  &nbsp;

                <span class="tooltiptext"><font color="orangered">Valid emails only</font></span>

              </div>

            </td>

            <td><input type="text" size="30" name="Email" placeholder="Email"></td>

          </tr>

        </table>
 
      <br>

      <?php echo $message; ?>

      <!------------Submit Buttons------------------->
      <br><br>

      <input type="submit" name="SUBMIT" value="SUBMIT">
      <input type="reset"  name="CLEAR"  value="CLEAR">
      
      </form>

    </div>

  </body>

</html>
