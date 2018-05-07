<!-- ***********************************************************************************
  Page Name  : Company page Program 4
  Author     : Jorge Sirias 
  Your URL   : ocelot-aul.fiu/~jsiri004
  Course     : CGS 4854 Web 3, Tuesdays & Thursdays, 7:50 - 9:05 PM
  Program #  : Assignment 4
  Purpose    : This page describes a fictitious company using a dropdown menu called from  
               the mainMenu.php file
  Due Date   : 4/5/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{Jorge Sirias}..........
 ******************************************************************************* -->

<html>

  <head>

    <title>Sirias Jorge Pgm 4 </title>
  
  </head>

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
      background-color: gold;
      color: purple;
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
      border-color: purple transparent transparent transparent;
    }
      
    .tooltip:hover .tooltiptext
    {
      visibility: visible;
      opacity: 1;
    }

    </style> <!--------------------------END OF Tooltip--------------------->

    <body>

     <!----------------------------Time Log Table---------------------------->     


            <?php include('timeLog.html') ?>

     <!----------------------------END OF Time Log Table END----------------->

     <!----------------------------Company Header-------------------------------------->
      <table>

        <tr>

          <div align="center">

            <p style="font-size:60px ; background-color:purple ; color:gold">The Comix Shoppe</p> 

          <div align="center">

        <tr>

        <br>

      </table>
      <!------------------------END of Company Header END-------------------------------->

      <!--------------------- Table that host the mainMenu.php---------------------->
      <table>

        <tr>

          <div align="center">

            <?php  include 'mainMenuPGM4.php'; ?> 

          </div>

        </tr>

      </table> <!--------------------------- end of mainMenu.php -------------------->

      <br>

      <!---------------------Table that hosts client input----------------------->
      <form action="controller4.php" method="post"> <!-- Form O -->

        <table width="100%" border="5" bordercolor="purple">

          <tr> <!-------------------------1st row O----------------------->
        
            <td>

              <table border="0"> 
         
                <td valign="middle" align="left" style="color:purple;"><!----------Telephone &nbsp;------------>

                  <div class="tooltip">Telephone &nbsp;

                    <span class="tooltiptext"><font color="purple">Required!</font></span>

                  </div>

                </td>

                <td valign="middle" align="center">

                  <input type="text" name="Telephone" placeholder="Telephone" value="<?php echo $Telephone ?>" style="width: 100%;">

                </td>

              </table>

              </td>
            
            <!------------------------- Checkbox ------------------------->
            <td>

            <div align="center">            

              <table border="0">

                <td "text-align:left" style="color:purple;"> <input type="checkbox" name="DCpublisher" <?php if ($DCpublisher == "DC") echo checked;?>  value="DC">DC  &nbsp;  &nbsp;  &nbsp; </td>

                <td valign="middle" align="left">

                <a href="https://www.youtube.com/channel/UCiifkYAs_bq1pt_zbNAzYGg">

                  <img src="../images/DC.jpg" width="90" heigth="90">

                </a>

                </td>

              </table>

            </div>

            </td>

            <!------------------------Radio Buttons----------------------------->            

            <td>

              <div align="center">

                <table border="0">
 
                  <td> <input type="radio" name="DCcharacter" <?php if ($DCcharacter == "Single Issue") echo checked;?>  value="Single Issue"></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:purple;">Single Issue</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="DCcharacter" <?php if ($DCcharacter == "Trade Paperback") echo checked;?>  value="Trade Paperback"></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color: purple;">Trade Paperback</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="DCcharacter" <?php if ($DCcharacter == "Omnibus") echo checked;?>  value="Omnibus"></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:purple;">Omnibus</div><td>

                </table>

              </div>

            </td>

          </tr>  <!---------- 1st row C ---------------> 

          <tr> <!--------- 2nd row O ------------------->

            <td>

              <table border="0">

                <td valign="middle" align="left" style="color:purple;"><!-----------Last Name &nbsp;----------->  

                  <div class="tooltip">Last Name &nbsp;
                
                    <span class="tooltiptext"><font color="purple">Enter Last Name</font></span>
                   
                  </div>

                </td>

                <td valign="middle" align="left"> 

                  <input type="text" name="lastName" placeholder="Last Name" value="<?php echo $lastName ?>" style="width: 100%;"> 

                </td>

              </table>

            </td> 
            
            <!--------------------------- Checkboxes------------------------>
            <td>

              <div align="center">

                <table border="0">

                  <td "text-align:left" style="color:purple;"> <input type="checkbox" name="Mpublisher" <?php if ($Mpublisher == "Marvel") echo checked;?>  value="Marvel">Marvel  </td>

                  <td valign="middle align="left">

                    <a href="http://marvel.com/">

                      <img src="../images/Marvel.jpg" width="90" heigth="90">

                    </a>

                  </td>

                </table>

              </div>
            
            </td>

            <!-----------------Radio buttons------------------->
            <td>

              <div align="center">

                <table border="0">

                  <td> <input type="radio" name="Mcharacter" <?php if ($Mcharacter == "Single Issue") echo checked;?>  value="Single Issue"></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color: purple;">Single Issue</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="Mcharacter" <?php if ($Mcharacter == "Trade Paperback") echo checked;?>  value="Trade Paperback"></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color: purple;">Trade Paperback</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="Mcharacter" <?php if ($Mcharacter == "Omnibus") echo checked;?>  value="Omnibus"></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:purple;">Omnibus</div></td>

                </table>

              </div>

            </td>

          </tr>  <!----------------- 2nd row C --------------->

           <tr> <!------------ 3rd row O --------------->

            <td>

              <table border="0">

                <td valign="middle" align="left" style="color:purple;"><!---------First Name &nbsp;---->

                  <div class="tooltip">First Name &nbsp;

                    <span class="tooltiptext"><font color="purple">Enter First Name</span></font>

                  </div>

                </td>

                <td  valign="middle" align="center">

                  <input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName ?>" style="width: 100%;">

                </td>

               </table>

              </td>

            <!-----------------Checkbox------------------------>
            <td>

              <div align="center">

                <table border="0">

                  <td "text-align:left" style="color:purple;"> <input type="checkbox" name="Ipublisher" <?php if ($Ipublisher == "Image") echo checked;?>  value="Image">Image  &nbsp; </td>

                  <td valign="middle" align="left">  

                    <a href="https://imagecomics.com/">

                      <img src="../images/Image.jpg" width="90" heigth="90">

                    </a>

                  </td>

                </table>

              </div>

            </td>

            <!---------------------Radio Buttons----------------------------->
            <td>

              <div align="center">

                <table border="0">

                  <td> <input type="radio" name="Icharacter" <?php if ($Icharacter == "Single Issue") echo checked;?>  value="Single Issue"> </td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:purple;">Single Issue</div></td>
                  <td>  &nbsp;  &nbsp; </td>
                  <td> <input type="radio" name="Icharacter" <?php if ($Icharacter == "Trade Paperback") echo checked;?> value="Trade Paperback"></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:purple;">Trade Paperback</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="Icharacter" <?php if ($Icharacter == "Omnibus") echo checked;?> value="Omnibus"></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:purple;">Omnibus</div></td>
                
                </table>

              </div>

            </td>

          </tr>  <!---------------------- 3rd row C--------------------->

          <tr> <!--------------------- 4th row O----------------------->

            <td>

              <table border="0">

                <td "text-align:left" style="color:purple;"><!------Email  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;----->

                  <div class="tooltip">Email  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
                
                    <span class="tooltiptext"><font color="purple">VALID Emails ONLY!</span></font>

                  </div>

                </td>

                <td valign="middle" align="center">

                  <input type="text" name="email" placeholder="Email" value="<?php echo $email ?>" style="width: 100%;">

                </td>

              </table>

            </td>

            <!----------------------Checkbox---------------------------->
            <td>

              <div align="center">

                <table border="0">

                  <td "text-align:left" style="color:purple;"> <input type="checkbox" name="Vpublisher" <?php if ($Vpublisher == "Valiant") echo checked;?>  value="Valiant">Valiant  &nbsp;  &nbsp; </td>

                  <td valign="middle" align="left">

                    <a href="http://valiantentertainment.com/">

                      <img src="../images/Valiant.jpg" width="70" heigth="70">

                    </a>

                  </td>

                </table>

              </div>

            </td>

            <!-----------------------Radio Buttons------------------------->
            <td>

              <div align="center">

                <table border="0">

                  <td> <input type="radio" name="Vcharacter" <?php if ($Vcharacter == "Single Issue") echo checked;?>  value="Single Issue"> </td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:purple;">Single Issue</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="Vcharacter" <?php if ($Vcharacter == "Trade Paperback") echo checked;?>  value="Trade Paperback"> </td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:purple;">Trade Paperback</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="Vcharacter" <?php if ($Vcharacter == "Omnibus") echo checked;?>  value="Omnibus"> </td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:purple;">Omnibus</div></td>

                </table>
      
              </div>

            </td>

          </tr>  <!------------------- 4th row C -------------------->

          <tr> <!-----------------------5th row O-------------------->

            <td>

              <table border="0">

                <td "text-align:left" style="color:purple;"><!-----Requests  &nbsp;------>

                  <div class="tooltip">Requests  &nbsp;

                    <span class="tooltiptext"><font color="purple">Tell us of any requirements or considerations</font></span>
                
                  </div>

                </td>

                <td valign="middle" align="center"> 

                  <textarea name="requests" placeholder="Requests" style="width:81%; height:100%;"><?php echo $requests ?></textarea>

                </td>

              </table>

            </td>

            <!------------------------Checkbox---------------------------->
            <td>

              <div align="center">

                <table border="0">

                  <td "text-align:left" style="color:purple;"> <input type="checkbox" name="DHpublisher" <?php if ($DHpublisher == "Dark Horse") echo checked;?>  value="Dark Horse">Dark Horse  &nbsp; </td>
                  <td valign="middle" align="left">

                    <a href="https://www.darkhorse.com/">

                      <img src="../images/DarkH.jpg" width="50" heigth="50">

                    </a>

                  </td>

                </table>

              </div>

            </td>

            <!-----------------Radio Buttons------------------------->
            <td>

              <div align="center">

                <table border="0">

                  <td> <input type="radio" name="DHcharacter" <?php if ($DHcharacter == "Single Issue") echo checked;?>  value="Single Issue"> </td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:purple;">Single Issue</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="DHcharacter" <?php if ($DHcharacter == "Trade Paperback") echo checked;?>  value="Trade Paperback"> </td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:purple;">Trade Paperback</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="DHcharacter" <?php if ($DHcharacter == "Omnibus") echo checked;?>  value="Omnibus"> </td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:purple;">Omnibus</div></td>

                </table>

              </div>

            </td>

          </tr>  <!----------------5th row C------------------->

        </table><!-------------END OF MAIN TABLE--------------->
        
        <br>
        <br>

        <!------------------------Table dropdown menu------------------->
        <div align="center">

        <table>

          <tr>
  
            <td style="text-align:right; color: purple;">Shipping &nbsp;  &nbsp;  &nbsp; </td> <!-- Had div align here -->
 
              <td "text-align:left">            

                <select name="Shipping" style="width:100%;">
                  <option value="Regular Shipping" <?php if ($Shipping == "Regular Shipping") echo selected;?> > Regular Shipping </option>
                  <option value="2-3 days Shipping" <?php if ($Shipping == "2-3 days Shipping") echo selected;?> > 2-3 days Shipping </option>
                  <option value="Overnight Shipping" <?php if ($Shipping == "Overnight Shipping") echo selected;?> > Overnight Shipping </option>
                </select>
              
              </td>

            <!-- Div align ended here-->

          </tr>

        </table>  
       
        </div> <!-------------------End of dropdown menu----------------->

        <br><br> 

      <!-----------------------$message------------------->
      <div align="center">

           <?php echo $message; ?>  <!------------FIX THIS! USE PHP TO RUN ECHO STATEMENT----------------------------------------------------------->

      </div> <!------------------END OF $message-------------- -->

      <br>

      <!---------------------Set of check boxes (find, save, delete, modify, clearscreen----------------- -->
      <div align="center">

        <table border="0">

          <tr>

            <td>

              <input type="submit" name="FIND" value="FIND">
              <input type="submit" name="SAVE" value="SAVE">
              <input type="submit" name="MODIFY" value="MODIFY">
              <input type="submit" name="DELETE" value="DELETE">
              <input type="submit" name="CLEAR" value="CLEAR">
              <input type="submit" name="HELP" value="HELP">
              <input type="submit" name="ABOUT" value="ABOUT">
              <input type="submit" name="CONTACT" value="CONTACT US">
              <input type="hidden" name="found" value="<?php echo $found ?>" >

            </td>

          </tr>

        </table>

      </div>

      <br>

      </form>

      <!----------------Bottom CSS main menu------------------>
      <table>

        <tr>

          <div align="center">

            <?php  include 'mainMenuPGM4.php'; ?>
      
          </div>

        </tr>

      </table> <!--------------END OF  CSS main menu------------ -->

    </body>

  </html> 
      
