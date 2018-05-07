<!-- ***********************************************************************************
  Page Name  : Company page 
  Author       : Jorge Sirias 
  Your URL  : ocelot-aul.fiu/~jsiri004
  Course       : CGS 4854 Web 3, Tuesdays & Thursdays, 7:50 - 9:05 PM
  Program #  : Assignment 2
  Purpose      : This page describes a fictitious company using a dropdown menu called from  
                 the mainMenu.php file
  Due Date    : 02/22/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{Jorge Sirias}..........
 ******************************************************************************* -->

<html>

  <head>

    <title>Sirias J Pgm 2 </title>
  
  </head>

    <body>

      <table>

        <tr>

          <div align="center">

            <p style="font-size:60px ; background-color:blue ; color:white">The Comix Shoppe</p> 

          <div align="center">

        <tr>

        <br>

      </table>

      <!--------------------- Table that host the mainMenu.php---------------------->
      <table>

        <tr>

          <div align="center">

            <?php  include 'mainMenu.php'; ?> 

          </div>

        </tr>

      </table> <!--------------------------- end of mainMenu.php -------------------->

      <br>

      <!---------------------Table that hosts client input----------------------->
      <form action="controller2.php" method="post"> <!-- Form O -->

        <table width="100%" border="5" bordercolor="blue">

          <tr> <!-------------------------1st row O----------------------->
        
            <td>

              <table border="0"> 
         
                <td valign="middle" align="left" style="color:blue;">Telephone &nbsp;</td>

                <td valign="middle" align="center">

                  <input type="text" name="Telephone" value="" style="width: 100%;">

                </td>

              </table>

              </td>
            
            <!------------------------- Checkbox ------------------------->
            <td>

            <div align="center">            

              <table border="0">

                <td "text-align:left" style="color:blue;"> <input type="checkbox" name="DCpublisher" <?php if ($DCpublisher == "DC") echo checked;?>  value="DC">DC  &nbsp;  &nbsp;  &nbsp; </td>

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
 
                  <td> <input type="radio" name="DCcharacter" <?php if ($DCcharacter == "Batman") echo checked;?>  value="Single Issue"></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:blue;">Single Issue</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="DCcharacter" <?php if ($DCcharacter == "Superman") echo checked;?>  value="Trade Paperback"></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color: blue;">Trade Paperback</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="DCcharacter" <?php if ($DCcharacter == "Wonder Woman") echo checked;?>  value="Omnibus"></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:blue;">Omnibus</div><td>

                </table>

              </div>

            </td>

          </tr>  <!---------- 1st row C ---------------> 

          <tr> <!--------- 2nd row O ------------------->

            <td>

              <table border="0">

                <td valign="middle" align="left" style="color:blue;">Last Name &nbsp;  </td>

                <td valign="middle" align="left"> 

                  <input type="text" name="lastName" value="" style="width: 100%;"> 

                </td>

              </table>

            </td> 
            
            <!--------------------------- Checkboxes------------------------>
            <td>

              <div align="center">

                <table border="0">

                  <td "text-align:left" style="color:blue;"> <input type="checkbox" name="Mpublisher" <?php if ($Mpublisher == "Marvel") echo checked;?>  value="Marvel">Marvel  </td>

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

                  <td> <input type="radio" name="Mcharacter" <?php if ($Mcharacter == "Spider-Man") echo checked;?>  value="Single Issue"></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color: blue;">Single Issue</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="Mcharacter" <?php if ($Mcharacter == "Captain America") echo checked;?>  value="Trade Paperback"></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color: blue;">Trade Paperback</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="Mcharacter" <?php if ($Mcharacter == "Iron Man") echo checked;?>  value="Omnibus"></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:blue;">Omnibus</div></td>

                </table>

              </div>

            </td>

          </tr>  <!----------------- 2nd row C --------------->

           <tr> <!------------ 3rd row O --------------->

            <td>

              <table border="0">

                <td valign="middle" align="left" style="color:blue;">First Name &nbsp;</td>

                <td  valign="middle" align="center">

                  <input type="text" name="firstName" value="" style="width: 100%;">

                </td>

               </table>

              </td>

            <!-----------------Checkbox------------------------>
            <td>

              <div align="center">

                <table border="0">

                  <td "text-align:left" style="color:blue;"> <input type="checkbox" name="Ipublisher" <?php if ($Ipublisher == "Image") echo checked;?>  value="Image">Image  &nbsp; </td>

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

                  <td> <input type="radio" name="Icharacter" <?php if ($Icharacter == "The Walking Dead") echo checked;?>  value="Single Issue"> </td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:blue;">Single Issue</div></td>
                  <td>  &nbsp;  &nbsp; </td>
                  <td> <input type="radio" name="Icharacter" <?php if ($Icharacter == "Hit Girl") echo checked;?> value="Trade Paperback"></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:blue;">Trade Paperback</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="Icharacter" <?php if ($Icharacter == "Kick Ass") echo checked;?> value="Omnibus"></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:blue;">Omnibus</div></td>
                
                </table>

              </div>

            </td>

          </tr>  <!---------------------- 3rd row C--------------------->

          <tr> <!--------------------- 4th row O----------------------->

            <td>

              <table border="0">

                <td "text-align:left" style="color:blue;">Email  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;</td>

                <td valign="middle" align="center">

                  <input type="text" name="email" value="" style="width: 100%;">

                </td>

              </table>

            </td>

            <!----------------------Checkbox---------------------------->
            <td>

              <div align="center">

                <table border="0">

                  <td "text-align:left" style="color:blue;"> <input type="checkbox" name="Vpublisher" <?php if ($Vpublisher == "Valiant") echo checked;?>  value="Valiant">Valiant  &nbsp;  &nbsp; </td>

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

                  <td> <input type="radio" name="Vcharacter" <?php if ($Vcharacter == "Bloodshot") echo checked;?>  value="Single Issue"> </td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:blue;">Single Issue</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="Vcharacter" <?php if ($Vcharacter == "X-O Manowar") echo checked;?>  value="Trade Paperback"> </td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:blue;">Trade Paperback</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="Vcharacter" <?php if ($Vcharacter == "Harbinger") echo checked;?>  value="Omnibus"> </td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:blue;">Omnibus</div></td>

                </table>
      
              </div>

            </td>

          </tr>  <!------------------- 4th row C -------------------->

          <tr> <!-----------------------5th row O-------------------->

            <td>

              <table border="0">

                <td "text-align:left" style="color:blue;">Requests  &nbsp;</td>

                <td valign="middle" align="center"> 

                  <textarea name="requests" style="width:81%; height:100%;"></textarea>

                </td>

              </table>

            </td>

            <!------------------------Checkbox---------------------------->
            <td>

              <div align="center">

                <table border="0">

                  <td "text-align:left" style="color:blue;"> <input type="checkbox" name="DHpublisher" <?php if ($DHpublisher == "Dark Horse") echo checked;?>  value="Dark Horse">Dark Horse  &nbsp; </td>
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

                  <td> <input type="radio" name="DHcharacter" <?php if ($DHcharacter == "Hell Boy") echo checked;?>  value="Single Issue"> </td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:blue;">Single Issue</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="DHcharacter" <?php if ($DHcharacter == "American Gods") echo checked;?>  value="Trade Paperback"> </td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:blue;">Trade Paperback</div></td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <input type="radio" name="DHcharacter" <?php if ($DHcharacter == "Rebels") echo checked;?>  value="Omnibus"> </td>
                  <td>  &nbsp;  &nbsp;</td>
                  <td> <div align="left" style="color:blue;">Omnibus</div></td>

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
  
            <td style="text-align:right; color: blue;">Shipping &nbsp;  &nbsp;  &nbsp; </td> <!-- Had div align here -->
 
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

          <p> $message </p>

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
              <input type="reset" name="ClearScreen" value="ClearScreen">

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

            <?php  include 'mainMenu.php'; ?>
      
          </div>

        </tr>

      </table> <!--------------END OF  CSS main menu------------ -->

    </body>

  </html> 
      
